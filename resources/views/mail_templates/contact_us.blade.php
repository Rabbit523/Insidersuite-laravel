@if ($subject != null)
<h3>Subject: {{$subject}}</h3>
@endif
<h4>Sender Name: {{ $name }}</h4>
<h4>Email: {{ $email }}</h4>
<h4>Message: {{ $content }}</h4>
@if ($path != null)
<img src="https://www.insidersuite.com/{{$path}}" style="width: 500px;">
@endif