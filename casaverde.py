import logging

logger = logging.getLogger(__name__)
logger.setLevel(logging.DEBUG)
ch = logging.StreamHandler()
formatter = logging.Formatter('%(asctime)s - %(name)s - %(levelname)s - %(message)s')
ch.setFormatter(formatter)
logger.addHandler(ch)

# from .exceptions import abort
from flask import Flask, session, render_template, request, flash, redirect, url_for, abort
from flask.ext.login import LoginManager, login_user, logout_user, current_user, login_required, UserMixin

app = Flask(__name__, static_url_path="")
app.secret_key = "bar"

login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = "login"

class User(UserMixin):
    def __init__(self, id):
        self.id = id

foo = User('foo')

@login_manager.user_loader
def load_user(userid):
    if userid == 'foo':
        return foo
    else:
        return None

@app.route("/logout")
@login_required
def logout():
    logout_user()
    return redirect(url_for('login'))

@app.route('/')
def index():
    logger.info("enter index")
    return render_template('index.html')

@app.route('/docs/<docnum>')
@login_required
def docs(docnum):
    # This will work if you generate docs dynamically.
    logger.info("doc " + str(docnum))
    session["docnum"] = docnum
    return render_template('doc.html')

#@app.route('/docs/<docnum>')
#@login_required
def alt_docs(docnum):
    # You might want to do something more like this, for
    # static HTML pages living in the templates directory.
    if docnum == 'calendar':
        return render_template('calendar.html')
    elif docnum == 'directory':
        return render_template('directory.html')
    abort(404, "No such document: " + str(docnum))


@app.route("/login", methods=["GET", "POST"])
def login():
    logger.info("enter login")
    if request.method == 'POST':
        if request.form['username'] == 'foo' and request.form['password'] == 'bar':
            login_user(foo, remember=True)
            logger.info("login redirect")
            return redirect(request.args.get("next") or url_for("index"))
        else:
            logger.info("login error")
            flash('Incorrect username or password. Try again.', 'error')

    logger.info("login render template")
    return render_template("login.html");

if __name__ == "__main__":
    app.run(host="0.0.0.0", debug=True)
