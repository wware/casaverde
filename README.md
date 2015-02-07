Teeny Flask App
=====

I was asked to write a little web app for a small organization that could
apply rudimentary password protection to some documents. The minimal needs
of the organization allow a single username and password to be shared by
all users.

I first thought of Django but a database was not desired, so I went for the
simpler option of using Flask. I drew on the following sources.

* http://flask.pocoo.org/docs/0.10/tutorial/
* https://flask-login.readthedocs.org/en/latest/
* http://gouthamanbalaraman.com/blog/minimal-flask-login-example.html
* http://stackoverflow.com/questions/16627384/flask-login-with-static-user-always-yielding-401-unauthorized

Deployment
----

I'm planning to use Heroku for this, because it's easy and painless. Here are
some tutorials because I haven't played with Heroku in a year or two.

* http://blog.miguelgrinberg.com/post/the-flask-mega-tutorial-part-xviii-deployment-on-the-heroku-cloud
* https://devcenter.heroku.com/articles/getting-started-with-python-o

I'm on a new-ish Lubuntu box and don't have the Heroku tools set up. So let's
get those, and then do a deployment.

```shell
wget -qO- https://toolbelt.heroku.com/install-ubuntu.sh | sh
heroku login
git push heroku master
# wait for it to finish deploying
heroku open    # open the app in your default browser
heroku logs    # examine the server logs
```
