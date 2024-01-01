<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Draft Extended Prelease offer ICT</title>
	<style type="text/css">
		@font-face {
			font-family: "TimesNewRoman";
			src: url("https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/font/times-new-roman/times-new-roman-bold.ttf") format("truetype");
			font-weight: bold;
			font-style: normal;
			font-display: swap;
		}
		@font-face {
			font-family: "TimesNewRoman";
			src: url("https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/font/times-new-roman/times-new-roman.ttf") format("truetype");
			font-weight: normal;
			font-style: normal;
			font-display: swap;
		}
		@font-face {
			font-family: "TimesNewRoman";
			src: url("https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/font/times-new-roman/times-new-roman-italic.ttf") format("truetype");
			font-weight: normal;
			font-style: italic;
			font-display: swap;
		}
		@font-face {
			font-family: "TimesNewRoman";
			src: url("https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/font/times-new-roman/times-new-roman-bold-italic.ttf") format("truetype");
			font-weight: bold;
			font-style: italic;
			font-display: swap;
		}
	</style>
</head>

<body>
	<!-- Header -->
    <table cellpadding="3" cellspacing="0" style="
        width: 100%;
        ">
        <tr>
            <td>
                <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/FutureMilez/FM-New-Logo.png" alt="future_milez_logo" height="80">
            </td>
        </tr>
    </table>
    
	<!-- Body -->
    <br />
    <table cellpadding="3" cellspacing="0" style="width: 100%;font-family: 'TimesNewRoman';font-size:14px;">
        <tbody><tr>
            <td style="width: 30%">Date</td>
            <td>: {Date}</td>
        </tr>
        <tr>
            <td>Employee Number</td>
            <td>: {Applicant Id}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>: {FullName}</td>
        </tr>
        <tr>
            <td>Contact No</td>
            <td>: {Mobile Number}</td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td>: {Email Id}</td>
        </tr>
    </tbody></table>
<table cellpadding="5" cellspacing="0" style="
width: 100%;
font-weight: normal;
font-family: 'TimesNewRoman';
font-size: 14px;
">
<tbody>
<tr>
	<td style="
	text-align: center;
	font-size:18px;
    font-family: 'TimesNewRoman';
	font-weight:bold;
	">
        <br/><br/>
		<u>Employment Contract</u>
	</td>
</tr>
<tr>
	<td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">Dear {First Name}</td>
</tr>
<tr>
	<td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">Congratulations!</td>
</tr>
<tr>
	<td style="font-weight: bold;font-size: 14px;font-family: 'TimesNewRoman';">
		<u>New job, new adventure - here is the fun stuff!</u>
	</td>
</tr>
<tr>
	<td style="font-weight: bold;font-size: 14px;font-family: 'TimesNewRoman';"><u>Designation :</u></td>
</tr>
<tr>
	<td>
		<table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';text-align:left;">
			<!-- <tbody> -->
                <tr><td style="width:12%;text-align:left;">Visa Sponsor</td><td style="width: 88%;">: Future Milez DMCC</td></tr>
                <tr><td style="width: 10%;text-align:left;">Designation</td><td style="width: 90%;">: {PositionDescription}</td></tr>
                <tr><td style="width: 12%;text-align:left;">Work Location</td><td style="width: 88%;">: {WorkLocationDescription}</td></tr>
		    <!-- </tbody> -->
        </table>
	</td>
</tr>
<tr>
	<td style="padding-bottom: 10px;font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">
		<strong style="text-decoration: underline;">Work Location: - </strong>You
		will be outsourced to work for {ClientName}, a client of FUTURE MILEZ
		DMCC. Future Milez DMCC can transfer you to other clients or locations
		based on similar terms and conditions with immediate notice.
	</td>
</tr>
<tr>
	<td style="padding-bottom: 10px;; font-weight: bold;font-size:14px;font-family: 'TimesNewRoman';">
		<u>Monthly Compensation:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td style="width: 30%;">a. Basic</td>
                                    <td>: AED {BASIC}</td>
                                </tr>
                                <tr>
                                    <td>b. HRA</td>
                                    <td>: AED {HRA}</td>
                                </tr>
                                <tr>
                                    <td>c. Transportation</td>
                                    <td>: AED {TRANSPORT}</td>
                                </tr>
                                <tr>
                                    <td>d. Utilities</td>
                                    <td>: AED {UTILITIES}</td>
                                </tr>
                                <tr>
                                    <td>e. Leave Encashment</td>
                                    <td>: AED 0</td>
                                </tr>
                                <tr>
                                    <td>f. Ticket Encashment</td>
                                    <td>: AED 0</td>
                                </tr>
                                <tr>
                                    <td><strong>g. Total Salary</strong></td>
                                    <td><strong>: AED {Totals}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width:3%;"><b>1.</b></td>    
                                    <td style="width:97%"><b>Terms and Conditions:</b><br>
                                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;width:4%;">a.</td>
                                                    <td style="width: 96%;">The above salary is guaranteed upon the successful completion of 244 orders.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">b.</td>
                                                    <td>You are eligible to receive AED 9.5 for all the delivery if you achieve a monthly delivery target of above 300 to below 350 orders per month.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">c.</td>
                                                    <td>You are eligible to receive AED 10 for all the delivery if you achieve a monthly delivery target of above 351 to below 400 orders per month.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">d.</td>
                                                    <td>You are eligible to receive AED 10.5 for all the delivery if you achieve a monthly delivery target of above 400 orders per month.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">e.</td>
                                                    <td>Your leave salary and ticket allowances will be provided to you as an encashment which will be part of your monthly salary and these benefits will not be part of your End of Services Benefit.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">f.</td>
                                                    <td>The above salary is deductible, If you do not complete the minimum 260 delivery a month, due to late login, early logouts, rejecting assigned orders etc.. And any such reasons due which you will not be able to complete the daily minimum working hours or delivery requirement.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">g.</td>
                                                    <td>Fuel Expense is part of your delivery amount and is borne by you.</td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">h.</td>
                                                    <td>Any expense incurred on the vehicle provided by the company will be recovered from per-order remuneration calculated on a monthly basis which includes but is not limited to damage caused by you to the vehicle, RTA fine, penalties, and Salik, as applicable.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
	   <u style="font-weight: bold;">Annual leave’s and other benefits: </u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">Sick leaves as per UAE Labour Law, subject to a medical certificate issued by an authorized source as per the guidelines of the concerned health authority</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>End of service gratuity as per UAE Labour Law paid on basic salary.</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>Medical Insurance for SELF under FUTURE MILEZ’s Group Insurance Policy, upon completion of medical test.</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>6 days working in a week,66 hours a week.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<strong>Little bit of paperwork, lots of trust - here is what we require!
		</strong> <br>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
		<strong>Documents &amp; Clearance:</strong><br><br>This Offer Letter is subject to receipt of various documents and clearances, as listed below:
    </td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">Signed Non-Disclosure Agreement provided by FUTURE MILEZ</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>Police clearance certificate issued from the UAE, if required</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>Two satisfactory reference checks</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>Attested educational certificate and credentials, if required</td>
                                </tr>
                                <tr>
                                    <td valign="top">e)</td>
                                    <td>Successful CID clearance, if required</td>
                                </tr>
                                <tr>
                                    <td valign="top">f)</td>
                                    <td>Medical fitness certificate from a government authority</td>
                                </tr>
                                <tr>
                                    <td valign="top">g)</td>
                                    <td>Visa and legal entry permit by the DMCC immigration authorities.</td>
                                </tr>
                                <tr>
                                    <td valign="top">h)</td>
                                    <td>Offer of services from the client. If the client’s offer is withdrawn prior to issuing your visa then FUTURE MILEZ can withdraw the offer without any financial compensation.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold;">Personal Information:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">Any personal information provided to FUTURE MILEZ will be stored on a cloud-based business application and will be used solely for securing your employment.</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>Your personal information is safeguarded and protected, however, since no data transmission over internet can be guaranteed to be 100% secure, FUTURE MILEZ will not be liable for any exposure of information from security risks such as viruses and unauthorized use</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>We may share your personal information with our clients and with third parties who shall be bound by provisions of confidentiality and you consent to sharing of such information.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Non-Disclosure Agreement:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">By signing this agreement, you agree to keep all information related to FUTURE MILEZ, its businesses, and finances confidential.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<br><strong>Greater the power, greater the responsibility - here is what you should know</strong>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">General Conditions:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">Employment becomes operative only when you commence the delivery services for the client.</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>Your day to day responsibilities will be assigned and supervised by the client directly</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>You are expected to follow all rules and regulations laid down by the client</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>It is recommended that you apply for travel insurance or continue your existing insurance till FUTURE MILEZ applies for your medical insurance</td>
                                </tr>
                                <tr>
                                    <td valign="top">e)</td>
                                    <td>Any appearance or summons to appear at any criminal court, or for any criminal conviction or civil order, prior to or during the period of your employment has to be reported to FUTURE MILEZ</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Absenteeism:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">Leaves during probation are unpaid leaves.</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>7 consecutive or 20 non-consecutive days of absenteeism without prior written permission could lead to termination without notice</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Outside Occupation:</u>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
		Pursuit of alternate occupation is prohibited unless approved by
		FUTURE MILEZ in writing.
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Fraud or Negligence:</u>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
		If there is an allegation of misconduct, criminal act, act of
		disobedience, insobriety or insubordination; employment will be
		terminated without notice and end of service benefits
		<br>
		False or misleading information will lead to termination
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<br /><strong>Building partnerships, achieving milestones - here are some pointers!</strong><br />
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Notice Period &amp; Termination during probation:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">You can terminate your services by giving <b>{Notice_Period_prb}</b> notice</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>FUTURE MILEZ may deduct equivalent salary if no prior notice has been given by you</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>FUTURE MILEZ can terminate your services by giving <b>{Notice_Period_prb}</b> notice</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>Post resignation/termination, you must return all assets belonging to the client and FUTURE MILEZ or pay financial damages instead.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold">Notice Period &amp; Termination after probation:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">You can terminate your services by giving <b>{Notice_Period} days’</b>  notice</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>FUTURE MILEZ may deduct equivalent salary if no prior notice has been given by you</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>FUTURE MILEZ can terminate your services by giving <b>{Notice_Period} days’</b> notice</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>If you resign within a year, FUTURE MILEZ will recover expenses of any additional training opted by you. This will be limited to one month’s salary and will be deducted from your full and final settlement</td>
                                </tr>
                                <tr>
                                    <td valign="top">e)</td>
                                    <td>Post resignation/termination, you must return all materials and properties belonging to the client and FUTURE MILEZ or pay financial damages instead.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<strong>Penalties </strong>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
        You are expected to comply with all instructions given by the Company and
        its client. Please note that failure to comply with the instructions and
        more specifically with the requirements below shall result in the
        deduction of penalties from your monthly remuneration. You consent to such
        deductions from your monthly remuneration and agree not to initiate claims
        against the Company for any deductions made. The fines mentioned hereunder
        are an approximate and genuine pre-estimate of the damage which will be
        incurred by the Company in case of your breach
	</td>
</tr>
<tr>
	<td>
		<table cellpadding="3" cellspacing="0" border="1" style="width:100%;margin-bottom:20px;font-size:14px;font-family: 'TimesNewRoman';">
			<thead>
				<tr>
					<th style="font-weight:bold;
				background-color: #00B0F0;
				"> Sr </th>
					<th style="font-weight:bold;
				background-color: #00B0F0;
				">  KPI </th>
					<th style="font-weight:bold;
				background-color: #00B0F0;
				"> Definition</th>
					<th style="font-weight:bold;
					background-color: #00B0F0;
					"> % </th>
					<th style="font-weight:bold;background-color: #00B0F0">
						Penalty Amount / Day
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="font-weight:normal;">1</td>
					<td style="font-weight:normal;">
						Deliver Damahed / Spoiled items due to late delivery by the driver
					</td>
					<td style="font-weight:normal;">
						Items cancelation or replacement by the customer or full order
						cancellation by the customer
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">
						Value of the damaged/spoil
					</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">2</td>
					<td style="font-weight:normal;">
						Late return of undelivered sensitive items to store/warehouse
					</td>
					<td style="font-weight:normal;">
						Sensitive items (fresh food, dairy products and frozen items)
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">
						Value of the undelivered items subject to a cap of AED 200.
					</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">3</td>
					<td style="font-weight:normal;">
						Very late return of undelivered items to store/warehouse
					</td>
					<td style="font-weight:normal;">
						Next day on Non Sensitive items (non fresh/non dairy/non frozen)
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">100 AED</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">4</td>
					<td style="font-weight:normal;">
						Vehicle Cleanliness
					</td>
					<td style="font-weight:normal;">
						Ensire all vehicles used are Clean and Maintained at all times.
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">200 AED</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">5</td>
					<td style="font-weight:normal;">Uniform</td>
					<td style="font-weight:normal;">
						All Drivers while on duty must wear Carrefour uniform (if
						provided)
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">200 AED</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">6</td>
					<td style="font-weight:normal;">
						Driver Reporting Time/Absenteeism
					</td>
					<td style="font-weight:normal;">
						Pre assigned number of Drives Must ensure theu report for Duty and
						as per the scheduled roaster - On Time (with a 10minuted grace
						period). Do not leave before the agreed time of end of shift
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">100 AED</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">7</td>
					<td style="font-weight:normal;">
						Assets Mishandling
					</td>
					<td style="font-weight:normal;">
						Driver Must return all company assets (thermal insulation, freezer
						bags, icegel packs, POS machines, any other company assets) to the
						company store ar the end of the shift in the same condition as
						received subject to reasonable wear and tear
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">
						In case of damage penalty as per asset cost
					</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">8</td>
					<td style="font-weight:normal;">
						Cas on Delivery orders cash to be deposited daily
					</td>
					<td style="font-weight:normal;">
						All collected cash from customers to be deposited the same day by
						Drivers
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">200 AED</td>
				</tr>
				<tr>
					<td style="font-weight:normal;">9</td>
					<td style="font-weight:normal;">
						Vehicle compliance
					</td>
					<td style="font-weight:normal;">
						All the vehicle should be compliant as per RTA regulation
						(Cars/bikes should be under company name/rental, all bikes should
						have boxes as per RTA etc.)
					</td>
					<td style="font-weight:normal;">100%</td>
					<td style="font-weight:normal;">200 AED</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
		In the event that the Company has to bear any fines on account of any
		actions/omissions by you as mentioned above and such fines as calculated
		on a monthly/quarterly basis exceed your monthly remuneration, the Company
		shall have the right to claim these from you as damages and you agree to
		reimburse the Company with all losses incurred by it on your account. <br/>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';font-weight:normal;">
		We look forward to having you onboard with us. Sign this offer letter and
		let’s get you started soon!
	</td>
</tr>
<tr>
	<td style="font-weight: bold;font-size: 14px;font-family: 'TimesNewRoman';">
		<u>Declaration: </u>
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">
		<u style="font-weight: bold;">I agree and acknowledge:</u>
	</td>
</tr>
<tr>
	<td style="width: 100%;">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>  
                    <td style="width:100%">
                        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a)</td>
                                    <td style="width: 97%;">To keep information related to FUTURE MILEZ and its clients confidential and private</td>
                                </tr>
                                <tr>
                                    <td valign="top">b)</td>
                                    <td>I am legally entitled to work, without any legal restriction imposed on me by any current or former employer</td>
                                </tr>
                                <tr>
                                    <td valign="top">c)</td>
                                    <td>I have no criminal records in the country of my origin or the UAE</td>
                                </tr>
                                <tr>
                                    <td valign="top">d)</td>
                                    <td>I am accountable to inform FUTURE MILEZ of my change in social status</td>
                                </tr>
                                <tr>
                                    <td valign="top">e)</td>
                                    <td>That these conditions are in addition to those specified in the UAE Labour contract</td>
                                </tr>
                                <tr>
                                    <td valign="top">f)</td>
                                    <td>That this offer of employment may be revoked at FUTURE MILEZ’s discretion at any time</td>
                                </tr>
                                <tr>
                                    <td valign="top">g)</td>
                                    <td>That I will abide by all the terms and conditions specified in this offer letter</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>
<br><br><br>

<table style="width: 100%;font-family: 'TimesNewRoman';font-size:14px">
    <tr>
    <td style="width: 30%;"><strong>For and onbehalf of Future Milez</strong><br><br>
        <div>
            <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/FutureMilez/FM-SIGNATURE.png" alt="TASC-SIGNATURE" height="50">
        </div><br/><strong>Future Milez DMCC</strong><br><strong>HR Department</strong>
    </td>
    <td style="text-align:center;width:25%;">
        <br><br><br>
        <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/FutureMilez/FM-STAMP.png" alt="TASC-STAMP" height="100">
    </td>
    <td style="width:45%;"><strong>Accepted and Agreed</strong><br><br><br>
        <div style="font-size:0px;">#sh1#</div>
        
            <table cellpadding="3" cellspacing="0" style="width:100%;width:100%;font-size:14px;font-family: 'TimesNewRoman';">
                <tbody><tr>
                    <td style="width: 30%;">Name </td>
                    <td style="width: 70%;">: <b>{FullName}</b></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Designation</td>
                    <td style="width: 70%;">: <b>{PositionDescription}</b></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Date</td>
                    <td style="width: 70%;">: <b>{Date}</b></td>
                </tr>
            </tbody></table>
    </td>
    </tr>
</table>

<!-- Footer -->
<table cellpadding="0" cellspacing="0" style=" width: 100%; font-weight: normal; font-size: 10px; font-family: 'TimesNewRoman';"> <tbody> <tr><td style="text-align: right;"> <br /><br /><br /> Page 1 of 4 <br> </td></tr> <tr> <td style="text-align: center;"> Future Milez DMCC. Unit No. 1505, Mazaya Business Avenue BB2, Plot No. JLTE-PH2-BB2, Jumeirah Lake Towers, Dubai, UAE </td> </tr> </tbody></table>

</body>
</html>