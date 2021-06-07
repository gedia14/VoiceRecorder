# Record Your Voice

Installation For Windows(Local):

1. Install XAMPP for windows:
   https://www.youtube.com/watch?v=Jd4H-4zfRw8
2. Clone the repository in C:\xampp\htdocs
3. open Xampp Control Panel from Windows Start Menu and start Apache Module
4. Open http://localhost/AudioRecorder/index.html in your browser adna follow the given instructions


Host on Server:
1. sudo apt-get update
2. sudo apt-get install apache2
3. sudo apt install php
4. sudo ln -S /mnt/VoiceRecorder /var/www/html
5. Access the recorded tool on : https://publichostname.com/VoiceRecorder

To setup https, follow these steps:
1. You will need to have ssl certificate and key in path /etc/letsencrypt/live/publichostname.couture.ai
2. To generate SSL certs, follow this https://certbot.eff.org/lets-encrypt/ubuntuxenial-other (Standalone method with no server running)
