<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Kontak Baru</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f6f8; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 25px; border-radius: 8px; border-top: 4px solid #1e3a8a;">
        <h2 style="color: #1e3a8a; margin-top: 0;">Pesan Baru Dari Form Kontak Website</h2>
        <p>Ada pesan pelanggan baru masuk melalui website CV GEBRINA JAYA:</p>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <tr>
                <td style="padding: 8px; font-weight: bold; width: 35%; border-bottom: 1px solid #eee;">Nama Pengirim:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $contactMessage->name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">No. HP / WhatsApp:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contactMessage->phone) }}" target="_blank">{{ $contactMessage->phone }}</a></td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Email:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $contactMessage->email ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Layanan Dibutuhkan:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $contactMessage->service_requested ?? 'Umum' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Lokasi / Kota:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $contactMessage->location ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Tanggal Pesan:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $contactMessage->created_at->format('d M Y - H:i') }} WIB</td>
            </tr>
        </table>

        <div style="margin-top: 20px; background: #f8fafc; padding: 15px; border-radius: 6px; border-left: 3px solid #f59e0b;">
            <h4 style="margin: 0 0 10px 0; color: #0f172a;">Isi Pesan:</h4>
            <p style="margin: 0; line-height: 1.6; white-space: pre-line;">{{ $contactMessage->message }}</p>
        </div>

        <p style="margin-top: 25px; font-size: 12px; color: #64748b; text-align: center;">
            Email ini dikirim otomatis oleh sistem website CV GEBRINA JAYA (https://gebrinajaya.com)
        </p>
    </div>
</body>
</html>
