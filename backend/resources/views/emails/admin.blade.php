<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { margin: 0; padding: 0; background-color: #ffffff; font-family: -apple-system, sans-serif; }
        .main { max-width: 600px; margin: 0 auto; padding: 40px 20px; }
        .header { border-bottom: 1px solid #000000; padding-bottom: 20px; margin-bottom: 40px; }
        .header h2 { margin: 0; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em; }
        .data-row { margin-bottom: 25px; }
        .label { font-size: 11px; text-transform: uppercase; color: #6b7280; font-weight: 600; margin-bottom: 5px; }
        .value { font-size: 16px; color: #111827; font-weight: 400; }
        .message-content { background-color: #f9fafb; padding: 30px; border-radius: 4px; font-size: 15px; color: #374151; line-height: 1.6; border: 1px solid #f3f4f6; }
    </style>
</head>
<body>
    <div class="main">
        <div class="header">
            <h2>Új Webes Megkeresés — {{ date('Y-m-d H:i') }}</h2>
        </div>

        <div class="data-row">
            <div class="label">Partner</div>
            <div class="value">{{ $formData['lastName'] }} {{ $formData['firstName'] }}</div>
        </div>

        <div class="data-row">
            <div class="label">Elérhetőség</div>
            <div class="value">{{ $formData['email'] }}</div>
        </div>

        <div class="data-row">
            <div class="label">Szervezet</div>
            <div class="value">{{ $formData['company'] ?? '—' }}</div>
        </div>

        <div class="data-row">
            <div class="label">Projekt rövid leírása</div>
            <div class="message-content">
                {{ $formData['message'] }}
            </div>
        </div>
    </div>
</body>
</html>