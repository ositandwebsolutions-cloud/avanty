<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</p>
<p><strong>Email:</strong> {{ $contactMessage->email }}</p>
<p><strong>Company:</strong> {{ $contactMessage->company ?? 'N/A' }}</p>
<p><strong>Subject:</strong> {{ $contactMessage->subject ?? 'N/A' }}</p>
<hr>
<p><strong>Message:</strong></p>
<p>{{ nl2br(e($contactMessage->message)) }}</p>