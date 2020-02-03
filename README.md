# Auto Forward SMS - Sample Endpoint code

This repo serves as a sample backend code for PHP & Python endpoint. These endpoints receive data submitted from [Auto Forward SMS](https://autoforwardsms.com/) Android app by using the app's [Forward To URL](https://autoforwardsms.com/Forward-to-URL.html) feature.

The request is sent with `Content-Type` as `application/json`. The JSON body is easily extended / modified in Android app to suit your needs.
This code is served as a demo only, please modify the code properly when you use this feature for production server.

### PHP: you can copy/paste the code into your server.
> Requirements: Web Server (Apache or Nginx), PHP and corresponding modules.

### Python:
> Requirements: [Python](https://www.python.org/) & [flask](https://www.palletsprojects.com/p/flask/)


`python sample.py`