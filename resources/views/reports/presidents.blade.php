@extends('layouts.master')

@section('title', 'Presidents Report')

@section('content')
<form method="post" action="form_submit.php?report=presidents">
<h1>Regional Presidents Report</h1>
	<fieldset>
		<legend>Identification</legend>
			<div><label for="i-full-name">Full Name</label> <div><input type="text" id="i-full-name" name="Identification[Full Name]" placeholder="John Doe" class="required" required=""> </div></div>
			<div><label for="i-email-address">Email Address</label> <div><input type="text" id="i-email-address" name="Identification[Email Address]" placeholder="john.doe@example.org"> </div></div>
			<div><label for="i-club-name">Club name</label> <div><input type="text" id="i-club-name" name="Identification[Club name]" placeholder="Placeholderton Y Service Club" class="required" required=""> </div></div>
			<div><label for="i-month-and-year-month">Month</label> <div><select id="i-month-and-year-month" name="Identification[Month and Year][Month]"><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option selected="" value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div></div>
			<div><label for="i-month-and-year-year">Year</label> <div><input type="text" id="i-month-and-year-year" value="2015" name="Identification[Month and Year][Year]"> 	</fieldset></div></div>
	<fieldset>
		<legend>Membership Details</legend>
			<div><label for="md-number-enrolled-at-first-of-month">Number enrolled at first of month</label> <div><input type="text" id="md-number-enrolled-at-first-of-month" name="Membership Details[Number enrolled at first of month]" class="required" required=""> </div></div>
			<div><label for="md-number-enrolled-at-end-of-month">Number enrolled at end of month</label> <div><input type="text" id="md-number-enrolled-at-end-of-month" name="Membership Details[Number enrolled at end of month]" class="required" required=""> </div></div>
			<div><label for="md-indicated-details-for-any-change-in-above-(name-and-/-or-address)">Indicated details for any change in above (name and / or address)</label> <div><textarea id="md-indicated-details-for-any-change-in-above-(name-and-/-or-address)" name="Membership Details[Indicated details for any change in above (name and / or address)]" class="required" required=""></textarea>  </div></div>
	</fieldset>
	<fieldset>
		<legend>Board of Director's Meetings Held</legend>
			<div><label for="bodmh-dates-held">Dates held</label> <div><input type="text" id="bodmh-dates-held" name="Board of Director's Meetings Held[Dates held]" class="required" required=""> </div></div>
			<div><label for="bodmh-number-present">Number present</label> <div><input type="text" id="bodmh-number-present" name="Board of Director's Meetings Held[Number present]" class="required" required=""> </div></div>
			<div><label for="bodmh-details-of-meeting">Details of meeting</label> <div><textarea id="bodmh-details-of-meeting" name="Board of Director's Meetings Held[Details of meeting]" class="required" required=""></textarea>  </div></div>
			<div><label for="bodmh-changes-in-club-officers">Changes in club officers</label> <div><textarea id="bodmh-changes-in-club-officers" name="Board of Director's Meetings Held[Changes in club officers]" class="required" required=""></textarea>  </div></div>
	</fieldset>
	<fieldset>
		<legend>Club Meetings</legend>
			<div><label for="cm-number-of-meetings-held">Number of meetings held</label> <div><input type="text" id="cm-number-of-meetings-held" name="Club Meetings[Number of meetings held]" class="required" required=""> </div></div>
			<div><label for="cm-average-attendance-(%)">Average attendance (%)</label> <div><input type="text" id="cm-average-attendance-(%)" name="Club Meetings[Average attendance (%)]"> </div></div>
			<div><label for="cm-highdivghts-of-each-meeting">Highdivghts of each meeting</label> <div><textarea id="cm-highdivghts-of-each-meeting" name="Club Meetings[Highdivghts of each meeting]" class="required" required=""></textarea>  </div></div>
	</fieldset>
	<fieldset>
		<legend>Fundraising Projects</legend>
			<div><label for="fp-type-of-projects-/-anticipated-profit-and-date">Type of Projects / anticipated profit and date</label> <div><textarea id="fp-type-of-projects-/-anticipated-profit-and-date" name="Fundraising Projects[Type of Projects / anticipated profit and date]" class="required" required=""></textarea>  </div></div>
	</fieldset>
	<fieldset>
		<legend>Service Projects</legend>
			<div><label for="sp-youth-/-community-service-chairman">Youth / Community Service chairman</label> <div><input type="text" id="sp-youth-/-community-service-chairman" name="Service Projects[Youth / Community Service chairman]" class="required" required=""> </div></div>
			<div><label for="sp-youth-/-community-service">Youth / Community Service</label> <div><textarea id="sp-youth-/-community-service" name="Service Projects[Youth / Community Service]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-alexander-scholarship-fund-chairman">Alexander Scholarship Fund chairman</label> <div><input type="text" id="sp-alexander-scholarship-fund-chairman" name="Service Projects[Alexander Scholarship Fund chairman]" class="required" required=""> </div></div>
			<div><label for="sp-alexander-scholarship-fund">Alexander Scholarship Fund</label> <div><textarea id="sp-alexander-scholarship-fund" name="Service Projects[Alexander Scholarship Fund]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-human-crisis-/-time-of-fast-chairman">Human Crisis / Time of Fast chairman</label> <div><input type="text" id="sp-human-crisis-/-time-of-fast-chairman" name="Service Projects[Human Crisis / Time of Fast chairman]" class="required" required=""> </div></div>
			<div><label for="sp-human-crisis-/-time-of-fast">Human Crisis / Time of Fast</label> <div><textarea id="sp-human-crisis-/-time-of-fast" name="Service Projects[Human Crisis / Time of Fast]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-ymca-service-chairman">YMCA Service chairman</label> <div><input type="text" id="sp-ymca-service-chairman" name="Service Projects[YMCA Service chairman]" class="required" required=""> </div></div>
			<div><label for="sp-ymca-service">YMCA Service</label> <div><textarea id="sp-ymca-service" name="Service Projects[YMCA Service]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-brotherhood-chairman">Brotherhood chairman</label> <div><input type="text" id="sp-brotherhood-chairman" name="Service Projects[Brotherhood chairman]" class="required" required=""> </div></div>
			<div><label for="sp-brotherhood">Brotherhood</label> <div><textarea id="sp-brotherhood" name="Service Projects[Brotherhood]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-extension-/-membership-/-conservation-chairman">Extension / Membership / Conservation chairman</label> <div><input type="text" id="sp-extension-/-membership-/-conservation-chairman" name="Service Projects[Extension / Membership / Conservation chairman]" class="required" required=""> </div></div>
			<div><label for="sp-extension-/-membership-/-conservation">Extension / Membership / Conservation</label> <div><textarea id="sp-extension-/-membership-/-conservation" name="Service Projects[Extension / Membership / Conservation]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-world-outlook-/-brother-clubs-chairman">World Outlook / Brother Clubs chairman</label> <div><input type="text" id="sp-world-outlook-/-brother-clubs-chairman" name="Service Projects[World Outlook / Brother Clubs chairman]" class="required" required=""> </div></div>
			<div><label for="sp-world-outlook-/-brother-clubs">World Outlook / Brother Clubs</label> <div><textarea id="sp-world-outlook-/-brother-clubs" name="Service Projects[World Outlook / Brother Clubs]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-endowment-fund-chairman">Endowment Fund chairman</label> <div><input type="text" id="sp-endowment-fund-chairman" name="Service Projects[Endowment Fund chairman]" class="required" required=""> </div></div>
			<div><label for="sp-endowment-fund">Endowment Fund</label> <div><textarea id="sp-endowment-fund" name="Service Projects[Endowment Fund]" class="required" required=""></textarea>  </div></div>
			<div><label for="sp-yeep-/-step-chairman">YEEP / STEP chairman</label> <div><input type="text" id="sp-yeep-/-step-chairman" name="Service Projects[YEEP / STEP chairman]" class="required" required=""> </div></div>
			<div><label for="sp-yeep-/-step">YEEP / STEP</label> <div><textarea id="sp-yeep-/-step" name="Service Projects[YEEP / STEP]" class="required" required=""></textarea>  </div></div>
	</fieldset>
<input class="cta" id="submitbutton" type="submit"></form>
@endsection