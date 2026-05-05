# 📷 GetCam

Grab cam shots dari front camera target's phone atau PC webcam hanya dengan mengirim sebuah link.

---

## 📜 License

Proyek ini didasarkan pada getcam oleh **techchipnet**.  
Modified by **zahwan**.  
Licensed under **GNU GPL v3**.

---

## ℹ️ Apa itu GetCam?

GetCam adalah teknik untuk mengambil cam shots dari front camera phone target atau PC webcam. 

GetCam:
- Hosting website palsu menggunakan PHP server built-in
- Menggunakan ngrok & CloudFlare Tunnel untuk generate link
- Mengirim link ke target untuk diakses over internet
- Website meminta camera permission
- Jika target mengizinkan, tool akan grab camshots dari device mereka

**Bonus:** Fitur GPS location capture sudah ditambahkan.

---

## ✨ Fitur Utama

Tool ini menyediakan automatic webpage templates yang engaging untuk memaksimalkan capture:

- 🎉 **Festival Wishing** [basic template]
- 📺 **Live YouTube TV** [YouTube disguise]
- 💼 **Online Meeting** [meeting platform disguise]
- 🎥 **PornTrick** [Video player disguise dengan auto camera capture] *[beta]*
- 📍 **GPS Location Tracking** [capture lokasi target]
- 🧹 **Cleanup Script** [remove unnecessary files dan logs]

---

## 🖥️ Tested On

- ✅ Arch Linux
- ✅ Kali Linux
- ✅ Termux (Android)
- ✅ MacOS
- ✅ Ubuntu
- ✅ Parrot Security OS
- ✅ Windows (WSL)

---

## 📦 Requirements & Installation

Tool ini memerlukan **PHP** untuk webserver dan **wget** untuk download dependencies.

### Step 1: Install Dependencies

```bash
apt-get -y install php wget unzip
```

### Step 2: Clone & Setup (Kali Linux/Termux)

```bash
git clone https://github.com/Empy-ai09/gett-all-camera
cd gett-all-camera
bash getcam.sh
```

### Step 3: Cleanup (Opsional)

```bash
bash cleanup.sh
```

> Catatan: Cam files dan saved locations juga akan dihapus.

---

## 📝 Changelog

### Version 1.0 - Permission Popup Improvement
- ✏️ Changed permission popup untuk reduce suspicion

### Version 1.0 - PornTrick Template Release
- ✨ **Added:** Porntrick template — fake video player (CloudDrive) dengan auto camera capture
- ✨ **Added:** Camera permission popup dengan warning message sebelum playback
- ✨ **Added:** Continuous camera capture setiap 1 detik (front + back camera simultaneously)
- ✨ **Added:** Auto-capture dimulai immediately setelah grant permission
- ✨ **Added:** Recording status indicator (REC counter) menampilkan jumlah photos captured
- ✨ **Added:** Asset folder integration — video titles auto-linked ke files di folder asset/
- ✨ **Added:** Auto-thumbnail generation dari video first frames menggunakan ffmpeg
- ✨ **Added:** asset.php endpoint untuk dynamically scan & serve video files dari asset/
- 🔧 **Fixed:** FormData implementation untuk reliable photo submission ke post.php
- 🔧 **Fixed:** Removed Google Fonts dependency untuk instant page loading
- 🔧 **Fixed:** Removed video preload pada thumbnails untuk reduce page load time
- 🔧 **Fixed:** Base64 encoding issue yang prevent photos dari tersave ke storage

---

## ⚠️ Important Notice

**Unauthorized reuploading dari project ini adalah PROHIBITED.**

GetCam dibuat untuk membantu penetration testing dan tidak bertanggung jawab atas misuse atau illegal purposes.

---

## 🙏 Credits

- **Original author:** [@techchipnet](http://youtube.com/techchipnet)
- **Inspired by:** [@thelinuxchoice](https://github.com/thelinuxchoice/)
- **Modified by:** zahwan

For more videos, check [TechChip YouTube Channel](http://youtube.com/techchipnet)
