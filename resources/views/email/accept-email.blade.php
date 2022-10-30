<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body style="-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;">
    <div style="padding: 1rem;">
        <h2 style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1.5rem; font-weight: 600; font-size: 1.25rem; line-height: 1.75rem;">PT. Dipo Star Finance (DSF)</h2>
        <h1 style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 0.75rem; font-weight: 700; font-size: 1.875rem; line-height: 2.25rem;">Permintaan Akses Server Anda Telah Disetujui</h1>
        <p style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 0.75rem;">Untuk mengakses server <span style="font-weight: 600;">PT. Dipo Star Finance (DSF)</span>, silahkan akses server sesuai dengan yang telah anda ajukan dibawah ini.</p>
        <div style="padding-left: 1.5rem; padding-right: 1.5rem; grid-template-columns: repeat(1, minmax(0, 1fr));">
        <div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Nama</p>
            <p>{{ $name }}</p>
            </div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Email</p>
            <p>{{ $email }}</p>
            </div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Asal Pengunjung</p>
            <p>{{ $origin }}</p>
            </div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Server Tujuan</p>
            <p>{{ $destination_server }}</p>
            </div>
        </div>
        <div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Tanggal Jam Mulai Akses</p>
            <p>{{ $entry_date }}</p>
            </div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Tanggal Jam Akhir Akses</p>
            <p>{{ $date_time_out }}</p>
            </div>
            <div style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <p style="font-weight: 600;">Tujuan</p>
            <p>{{ $reason }}</p>
            </div>
        </div>
        </div>
        <p style="padding: 1.5rem;">Terimakasih.</p>
    </div>
  </body>
</html>
