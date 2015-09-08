@extends('layouts.master-wide')

@section('title', 'About the Y&rsquo;s Men Maritimes Region')

@section('hero')
<section class="intro hero" style="text-align: center; background-image: url('img/homebg.jpg'); background-size: cover; background-position: center;">
  <div class="wrap" style="padding-top: 100px; padding-bottom: 100px;">
    <ul class="stats stats-about">
      <li><span>{{ $club_count }}</span> clubs</li>
      <li><span>4</span> provinces</li>
      <li><span>{{ $district_count }}</span> districts</li>
      <li><span>1</span> Maritimes Region</li>
    </ul>
  </div>
</section>
@endsection

@section('content')
<section class="wrap" id="about">
  
  <h1>About the Maritimes Region</h1>

  <p class="lead">The Maritimes Region encompasses the eastern Canadian provinces of New Brunswick, Nova Scotia, Prince Edward Island and Newfoundland. 
  There are three districts &mdash; the Cape Breton District, the Northumberland District and the Saint John River Valley District with a total of 12 clubs.</p>

  <p>The Maritimes Region was created to help facilitate the administrative structure. Our clubs have a Regional Awareness which provides them 
  with the advantage of:</p>

  <ul>
  <li>The ability to respond to local and regional humanitarian needs more effectively.</li>
  <li>A communication with distant clubs.</li>
  <li>Provide a social aspect for members.</li>
  <li>Helps Y&#8217;s Men broaden their horizons.</li>
  <li>Prevents clubs from becoming ingrown.</li>
  <li>Nurtures &ldquo;Esprit De Corp&rdquo; in the movement.</li>
  </ul>

  <p>Being part of an international organization means contributing to all parts of the structure.</p>
</section>

<hr class="page-hr">

<section class="wrap" id="area-canada-caribbean">
  <h1>Area Canada and Caribbean</h1>

  <aside class="page-aside">
    <h1>Links to sites</h1>
    <ul>
      <li><a href="http://ysmen.org/">Y&rsquo;s/Y Service Clubs International</a></li>
      <li><a href="http://ysmen.org/index.php?id=46">Y&rsquo;s Area Canada &amp; Caribbean</a></li>
      <li><a href="http://www.ysmenusa.com/">U.S. Area</a></li>
    </ul>
  </aside>

  <p class="lead">The Canada and Caribbean Area is an association of Y&#8217;s Men&#8217;s Clubs. It has a formal affiliation with the National Association of YMCA&#8217;s of Canada. This organization recognizes the Y&#8217;s Menettes Clubs of Canada as an auxillary organization.</p>

  <p>The objectives of the Canada and Caribbean Area are:</p>

  <ol>
    <li>To encourage, promote, and foster organization and maintenance of Y&#8217;s Men&#8217;s Clubs throughout Canada and the Carribean.</li>
    <li>To coordinate the activities of all Regions and provide supplementary training materials and personal leadership development.</li>
  </ol>

  <h2>Structure of the Canada and Caribbean Area</h2>

  <p>The Canadian Area is divided into four regions:</p>

  <ol>
    <li>The Western Canada Region which includes the provinces of British Columbia, Alberta, Saskatchewan, and Manitoba as well as the Yukon, and the Northwest Territories.</li>
    <li>The Central Canada Region which includes the provinces of Ontario and Quebec.</li>
    <li>The Maritimes Region which includes the provinces of New Brunswick, Nova Scotia, Prince Edward Island and Newfoundland.</li>
    <li>The Caribbean Region &mdash; Clubs in Aruba, Barbados, Jamaica, and Trinidad/Tobago</li>
  </ol>
</section>

<hr class="page-hr">

<section class="wrap" id="service-projects">
  <h2>Service Projects</h2>
  <ul>
    <li>Alexander Scholarship Fund</li>
    <li>Time of Fast</li>
    <li>Endowment Fund</li>
    <li>International Brother Clubs</li>
    <li>Brotherhood Fund</li>
    <li>Say NO to Violence</li>
    <li>Christian Emphasis</li>
    <li>Community Service</li>
  </ul>
</section>
@endsection