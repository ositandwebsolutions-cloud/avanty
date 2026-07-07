<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }
        .email-wrapper {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .email-header {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 30px 40px;
            text-align: center;
        }
        .email-header h2 {
            margin: 0;
            font-size: 22px;
            font-weight: 400;
            letter-spacing: 1px;
        }
        .email-body {
            padding: 40px;
            color: #333333;
            line-height: 1.6;
        }
        .info-row {
            margin-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 10px;
        }
        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            color: #888888;
            font-weight: bold;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 5px;
        }
        .info-value {
            font-size: 16px;
            color: #111111;
        }
        .message-block {
            margin-top: 35px;
            background-color: #fafafa;
            padding: 25px;
            border-left: 4px solid #d4af37; /* Gold accent to match premium branding */
            border-radius: 4px;
        }
        .message-content {
            font-size: 15px;
            color: #444444;
        }
        .email-footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #aaaaaa;
            border-top: 1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h2>New Contact Submission</h2>
        </div>
        
        <div class="email-body">
            <div class="info-row">
                <span class="info-label">Name</span>
                <span class="info-value">{{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</span>
            </div>
            
            <div class="info-row">
                <span class="info-label">Email</span>
                <span class="info-value">
                    <a href="mailto:{{ $contactMessage->email }}" style="color: #d4af37; text-decoration: none;">
                        {{ $contactMessage->email }}
                    </a>
                </span>
            </div>
            
            <div class="info-row">
                <span class="info-label">Company</span>
                <span class="info-value">{{ $contactMessage->company ?? 'N/A' }}</span>
            </div>
            
            <div class="info-row">
                <span class="info-label">Subject</span>
                <span class="info-value">{{ $contactMessage->subject ?? 'N/A' }}</span>
            </div>
            
            <div class="message-block">
                <span class="info-label" style="margin-bottom: 15px;">Message</span>
                <div class="message-content">{!! nl2br(e($contactMessage->message)) !!}</div>
            </div>
        </div>
        
        <div class="email-footer">
            Automated notification from Avanty Capital
        </div>
    </div>
</body>
</html>