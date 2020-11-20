from flask import Flask, request, jsonify
import util

app = Flask(__name__)

@app.route("/get_location_names")
def hello():
    response = jsonify({
        "locations": util.get_location_names()
    })
    response.headers.add("Acces-Control-Allow-Origin", "*")

    return response



if __name__ == "__main__":
    print("Starting Server")
    app.run()