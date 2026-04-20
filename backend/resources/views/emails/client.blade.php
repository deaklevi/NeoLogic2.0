<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { margin: 0; padding: 0; background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #ffffff; padding-bottom: 60px; }
        .main { max-width: 600px; margin: 0 auto; padding: 40px 20px; }
        .logo { font-size: 20px; font-weight: 700; color: #000000; letter-spacing: -0.02em; text-transform: uppercase; margin-bottom: 60px; }
        .content h1 { font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 24px; letter-spacing: -0.03em; }
        .content p { font-size: 16px; line-height: 1.6; color: #4b5563; margin-bottom: 20px; }
        .next-step { margin: 40px 0; padding-left: 20px; border-left: 2px solid #2563eb; }
        .next-step h3 { font-size: 14px; font-weight: 600; color: #2563eb; text-transform: uppercase; margin: 0 0 8px 0; letter-spacing: 0.05em; }
        .next-step p { margin: 0; font-size: 15px; color: #1f2937; }
        .cta-button { display: inline-block; padding: 12px 24px; background-color: #000000; color: #ffffff !important; text-decoration: none; border-radius: 6px; font-size: 15px; font-weight: 500; margin-top: 20px; }
        .footer { margin-top: 60px; padding-top: 30px; border-top: 1px solid #f3f4f6; color: #9ca3af; font-size: 13px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="main">
            <div class="logo">NeoLogic</div>
            
            <div class="content">
                <h1>Megkaptuk az üzenetét.</h1>
                <p>Kedves {{ $formData['firstName'] }},</p>
                <p>Köszönjük a megkeresését. Ezúton visszaigazoljuk, hogy rendszerünk sikeresen rögzítette a projektjével kapcsolatos adatokat.</p>
                
                <div class="next-step">
                    <h3>Mi történik most?</h3>
                    <p>Szakmai csapatunk áttekinti az információkat, és 24 órán belül felvesszük Önnel a kapcsolatot a megadott elérhetőségek egyikén.</p>
                </div>

                <p>Amíg várakozik, látogasson el weboldalunkra, ahol megtekintheti legutóbbi projektjeinket és megoldásainkat.</p>
                
                <a href="https://neologic.hu" class="cta-button">Weboldal megnyitása</a>
            </div>

            <div class="footer">
                <strong>NeoLogic Csapata</strong><br>
                Budapest, Magyarország<br>
                <span style="font-size: 11px;">Ez egy automatikus rendszerüzenet.</span>
            </div>
        </div>
    </div>
</body>
</html>