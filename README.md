# PHP XXE Sandbox Environment

This is a Docker-based PHP xxe sandbox environment that allows you to test XML processing code. The environment includes the Apache web server and the PHP programming language, and is pre-configured to run your PHP code.

It's important to note that XML processing code can be vulnerable to XML external entity (XXE) injection attacks. XXE attacks can be used to read sensitive data from the server or to perform out-of-band (OOB) attacks to exfiltrate data to an attacker-controlled server.

To protect against XXE attacks, it's important to ensure that your XML processing code properly validates and sanitizes user input. Additionally, you should disable the ENTITY expansion feature or limit it to a whitelist of trusted entities. Alternatively, you can use XML parsing libraries that provide built-in protection against XXE attacks, such as the XMLReader or XMLWriter classes in PHP.

It's also important to be aware of OOB XXE attacks, which can be more difficult to detect than in-band attacks. OOB XXE attacks involve sending data to an attacker-controlled server using a SYSTEM entity that makes an HTTP request. To protect against OOB XXE attacks, you should ensure that your server is configured to prevent outbound connections to untrusted servers or to log all outbound connections for analysis.

## Usage

To use this project, you will need to have Docker installed on your computer.

Open a terminal window and run the following command to pull the Docker image from Docker Hub:

```
docker pull thewation/xxesandbox
```

Run the Docker container using the following command:

```
docker run -p 8000:80 thewation/xxesandbox
```

This command will start the Docker container and map port 80 of the container to port 8000 of your local machine. You can access the PHP files in the container by opening your web browser and navigating to `http://127.0.0.1:8000/`.

Note that these files are intentionally vulnerable and should not be used on a production server or in any situation where security is a concern. They are designed for educational purposes only to demonstrate how command injection and remote code execution vulnerabilities can be exploited.

## Files

### index.php

This file accepts XML data from either a POST request body or a query parameter named input and extracts the value of the title field from the XML data. The value of the title field is then displayed on the webpage. This file can be used to test XXE attacks by sending malicious XML data that includes external entities.

### blind.php

This file is similar to index.php in that it accepts XML data and processes it using SimpleXML. However, instead of extracting a specific field from the XML data, it simply outputs a message saying "Thank you". This file can be used to test blind XXE attacks by sending XML data that makes an out-of-band request to an attacker-controlled server.

## Disclaimer
For educational purposes only. Do not use for illegal activities. Use at your own risk. By using this tool, you agree to comply with all applicable laws and regulations. Unauthorized use is strictly prohibited. Always obtain permission before using this tool. No warranties.

## License

`XXESandbox` is made with ♥  by [Wation](https://github.com/TheWation) and it's released under the MIT license.