from flask import Flask, request
from datetime import date


app = Flask(__name__, static_url_path='')



@app.route("/")
def index():
    today = date.today()
    browser=  request.user_agent.browser
    version=  request.user_agent.version
    return """
    <h1>Today is {}</h1>
    <p>Your Browser is {}, version: {}</p>
    """.format(today,browser,version)

if __name__ == "__main__":
      app.run(host="0.0.0.0", port=5500)