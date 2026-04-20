<div style="background: #0f0f0f; color: #ffffff; padding: 40px 20px; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #333; border-radius: 12px;">
    <div style="text-align: center; margin-bottom: 40px;">
        <div style="display: inline-block; padding: 10px 20px; border: 1px solid #F3A122; border-radius: 4px;">
            <span style="color: #F3A122; font-weight: bold; font-size: 22px; letter-spacing: 3px; text-transform: uppercase;">NeoLogic</span>
        </div>
    </div>

    <div style="padding: 0 20px;">
        <h2 style="font-weight: 300; font-size: 26px; margin-bottom: 20px;">Üdvözöljük, <span style="color: #F3A122;">{{ $formData['lastName'] }} {{ $formData['firstName'] }}</span>!</h2>
        
        <p style="line-height: 1.7; color: #ccc; font-size: 16px;">
            Köszönjük, hogy megtisztelt minket bizalmával és felvette velünk a kapcsolatot.
        </p>

        <p style="font-size: 14px; color: #888; margin-bottom: 10px;">Az Ön által küldött üzenet:</p>
        <div style="border-left: 2px solid #F3A122; padding-left: 20px; font-style: italic; color: #999; margin-bottom: 35px; line-height: 1.6;">
            "{{ $formData['message'] }}"
        </div>
    </div>
</div>