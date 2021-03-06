@extends('profilelayout')
@section('content')
 <div class="page-header">
         <h3>WebM Support</h3>
 </div>

<div class="box">
<h5>WebM how to</h5>
<p>On this page you will find anything related to WebMs</p>
</div>

<div class="box">
<h4>Useful tools for creating WebMs</h4>
<p>There is a good documentation with various ffmpeg tools on github, you should definetly check it out and pick the one you like the most!</p>
<ul>
   <li><a href="https://github.com/Kagami/webm.py/wiki/Related-links">List of tools and information</a></li>
   <li><a href="https://github.com/Kagami/boram">Boram by Kagami</a> Cross Platform Gui application for cutting, cropping and converting videos into WebM format, has integrated youtube-dl option, so you can directly download from any site that is supported by youtube-dl. Definetly the best choice if you want to have it quick and easy with a nice looking result!</li>
   <li><a href="https://github.com/Kagami/webm.py">webm.py by Kagami</a> If you are more the CLI fan like me, this is something for you, it's a very easy cli tool and basically the best fucking tool if you want to create a WebM real quick by only using your shell.</li>
</ul>
   <p>Sample lines for webm.py <code>python webm.py -i your.mp4 your.webm</code> will convert your mp4 into a vp9 webm with max filesize of 8MB! <code>python webm.py -l 4 -vp8 -i your.mp4|webm yourwebmfor4chan.webm</code> will set the maximum filesize to 4MB and convert it using the VP8 codec and vorbis audio codec.</p>
</div>

<div class="box">
<h4>Get a WebM directly from YouTube</h4>
<p>There are many ways on how to download videos from YouTube but most people don't know that you can grab a WebM directly from YouTube.</p>
<p>The easiest and probably best way is jdownloader 2, all you need to do is copy a youtube link and jdownloader will add it to the link collector, from there you can select how jdownloader should download the video.</p>
<img src="https://files.nogf.club/winfick/ad224c7e257a.png" />
<p>Please note that HD WebM is not always available, there should always be a 360p version available.</p>
</div>

<div class="box">
<h4>coub.com Downloader</h4>
<p><a href="https://coub.com"target="_blank">coub.com</a> is a great place to explore some nice videos, I made this little script that helps you to grab the videos from their site and instantly convert it to <code>.webm</code></p>
<p>Download <a href="https://github.com/sirx/coubdl" target="_blank">the script</a> from my github repo and just run it like this: <code>bash coubdl.sh URL</code> it will then ask you how long your video should be, it will show you the duration of just the loop and the duration of the audio file used for it.</p>
<p>After that you can specify the output max size by just typing in a single number like <code>4</code> and the script will convert your video to 4MB</p>
<p>Requirements: <code>yotube-dl, jq, ffmpeg, ffprobe, python & webm.py</code>
</div>

<div class="box">
<h4>Some information about ffmpeg</h4>
<p>If you want to learn more about FFmpeg check out <a href="https://de.wikipedia.org/wiki/FFmpeg">FFmpeg Wiki</a> and <a href="https://ffmpeg.org/">ffmpeg.org</a></p>
<p>ffmpeg is able to convert your .mkv and/or .mp4 files in to .webm for example and it is really easy, you just need to type in one line of commands</p>
</div>

<div class="box">
<h5>If your uploads fails and you see this: Erroneous File Encoding! Try reencoding it</h5>
<code><s>ffmpeg -i problem.webm -map 0:0 -map 0:1 -c:v copy solved.webm</s> <b>(PATCHED)</b></code>
</div>

<div class="box">
<h5>Windows</h5>
<p>There are just like in Linux many ways to convert a WebM in Windows, you can even do it from the CLI like I described above, but many Windows users don't use the CMD very often, so in this section I will explain how to make a nice WebM in Windows using a GUI program!</p>
<p>The best way is probably <a href="https://github.com/Kagami/boram">Boram by Kagami</a> it has a very user friendly GUI and works like a charm I can definetly recommend this!</p>
<p>Or you can use <a href="https://gitgud.io/nixx/WebMConverter">WebMConverter</a> by nixx, it has all the things you need but it can't download videos directly from the internet to convert them on the fly, but it will still work!</p>
</div>
@endsection
