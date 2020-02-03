import flask
from flask import request, jsonify

app = flask.Flask(__name__)
app.config["DEBUG"] = True

@app.route('/phone', methods=['POST'])
def postSMS():
    if not request.json:
        abort(400)

    req = request.json
    # You can parse more variables from Body here
    # From here, you can process Body content further. For demonstration purpose, I only return back the parsed content.
    print(req)
    return req, 201

app.run(host='0.0.0.0')

#curl -i -H "Content-Type: application/json" -X POST -d '{"data":{"phoneNumber": "123456789", "sms": "This is a test SMS"}}' http://[SERVER_IP_ADDR]:5000/phone