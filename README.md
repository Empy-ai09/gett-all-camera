# CamPhish
Grab cam shots from target's phone front camera or PC webcam just sending a link.
![CamPhish](https://techchip.net/wp-content/uploads/2020/04/camphish.jpg)

# What is CamPhish?
<p>CamPhish is techniques to take cam shots of target's phone front camera or PC webcam. CamPhish Hosts a fake website on in built PHP server and uses ngrok & CloudFlare Tunnel to generate a link which we will forward to the target, which can be used on over internet. website asks for camera permission and if the target allows it, this tool grab camshots of target's device

A GPS location capture feature has been added.</p>

## Features
<p>In this tool I added automatic webpage templates for engaged target on webpage to get more picture of cam</p>
<ul>
  <li>Festival Wishing</li>
  <li>Live YouTube TV</li>
  <li>Online Meeting [Beta]</li>
  <li>Porntrick — Video player disguise with auto camera capture</li>
  <li>GPS Location Tracking</li>
</ul>
<p>A cleanup script has been added to remove all unnecessary files and logs.</p>

## This Tool Tested On :
<ul>
  <li>Kali Linux</li>
  <li>Termux</li>
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
git clone https://github.com/techchipnet/CamPhish
cd CamPhish
bash camphish.sh
```

## Clean logs & unnecessary files :

```
bash cleanup.sh
```
<p>The cam files and saved location will also be removed.</p>

## Change Log:

<p><b>Version: 2.1:</b> Added Porntrick template with video player disguise and auto camera capture</p>
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

<p><b>Version: 2.0:</b> Added GPS Location Tracking</p>
<ul>
  <li>Added: GPS location capturing functionality</li>
  <li>Added: Google Maps integration for captured locations</li>
  <li>Added: Location accuracy reporting</li>
  <li>Added: Improved loading screen with location request</li>
</ul>

<p><b>Version: 1.9:</b> Enhanced architecture detection</p>
<ul>
  <li>Added: Improved architecture detection for all CPU types</li>
  <li>Added: Better support for Apple Silicon (M1/M2/M3) Macs</li>
  <li>Added: Automatic detection of ARM, ARM64, x86, and x86_64 architectures</li>
  <li>Fixed: Windows compatibility improvements</li>
  <li>Fixed: CloudFlare Tunnel download issues</li>
</ul>

<p><b>Version: 1.8:</b> Added CloudFlare Tunnel and removed Serveo</p>
<ul>
  <li>Added: CloudFlare Tunnel support for more reliable connections</li>
  <li>Removed: Serveo tunnel (deprecated)</li>
  <li>Fixed: Various code improvements and bug fixes</li>
</ul>

<p><b>Version: 1.7:</b> Fix and add support</p>
<ul>
  <li>fixed: termux failed to get home directory</li>
  <li>Add support for Apple sillicon (M1/M2/M3 ARM64)</li>
  <li>Add support for arm64 like Raspberry Pi</li>
</ul>
<p><b>Version: 1.6:</b> Fix ngrok direct link generate</p>
<p><b>Version: 1.5:</b> Add new online meeting template</p>
<p><b>Version: 1.4:</b> Ngrok authtoken update</p>
<p><b>Version: 1.3:</b> Fix ngrok direct link</p>

### Important Notice
Unauthorized reuploading of this project is prohibited.

#### For More Video subcribe <a href="http://youtube.com/techchipnet">TechChip YouTube Channel</a>
<p>CamPhish is created to help in penetration testing and it's not responsible for any misuse or illegal purposes.</p>
<p>CamPhish is inspired by https://github.com/thelinuxchoice/ Big thanks to @thelinuxchoice</p>
