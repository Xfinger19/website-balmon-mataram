from flask import Flask, render_template, request, redirect, url_for, flash
import requests

app = Flask(__name__)
app.secret_key = "rahasia_balmon"

# GANTI DENGAN KONFIGURASI API WA ANDA
WA_ACCESS_TOKEN = "MASUKKAN_TOKEN"
WA_PHONE_NUMBER_ID = "MASUKKAN_ID"
WA_NOMOR_PETUGAS = "6282266516166"

@app.route('/')
def index():
    return render_template('index.html', current_page='index.php')

@app.route('/profil')
def profil():
    return render_template('profil.html', current_page='profil.php')

@app.route('/layanan')
def layanan():
    return render_template('layanan.html', current_page='layanan.php')

@app.route('/pengaduan', methods=['GET', 'POST'])
def pengaduan():
    if request.method == 'POST':
        nama = request.form.get('nama')
        frekuensi = request.form.get('frekuensi')
        lokasi = request.form.get('lokasi')
        deskripsi = request.form.get('deskripsi')

        pesan = f"🚨 *LAPORAN GANGGUAN BARU* 🚨\n\n"
        pesan += f"👤 *Nama:* {nama}\n"
        pesan += f"📡 *Frekuensi:* {frekuensi} MHz\n"
        pesan += f"📍 *Lokasi:* {lokasi}\n"
        pesan += f"📝 *Deskripsi:* {deskripsi}\n"

        url = f"https://graph.facebook.com/v19.0/{WA_PHONE_NUMBER_ID}/messages"
        headers = {
            "Authorization": f"Bearer {WA_ACCESS_TOKEN}",
            "Content-Type": "application/json"
        }
        data = {
            "messaging_product": "whatsapp",
            "to": WA_NOMOR_PETUGAS,
            "type": "text",
            "text": {"body": pesan}
        }

        try:
            response = requests.post(url, headers=headers, json=data, timeout=10)
            if response.status_code == 200:
                flash("Laporan berhasil dikirim! Petugas kami akan segera menindaklanjuti.", "success")
            else:
                flash(f"Gagal mengirim otomatis. Kode: {response.status_code}", "error")
        except Exception as e:
            flash(f"Terjadi kesalahan koneksi: {str(e)}", "error")

        return redirect(url_for('pengaduan'))

    return render_template('pengaduan.html', current_page='pengaduan.php')

if __name__ == '__main__':
    app.run(debug=True)