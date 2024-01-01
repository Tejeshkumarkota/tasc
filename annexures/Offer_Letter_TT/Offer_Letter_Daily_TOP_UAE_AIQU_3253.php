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
    <table cellpadding="3" cellspacing="0" style="width: 100%;text-align:right;">
        <tr>
            <td>
                <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/TASC_LabourServices/AIQU_Logo.png" width="120" alt="Logo">
            </td>
        </tr>
    </table>
    
	<!-- Body -->
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
            <td>Contact Number</td>
            <td>: {Mobile Number}</td>
        </tr>
        <tr>
            <td>Email Id</td>
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
		<u>Subject: Offer Letter</u>
	</td>
</tr>
<tr>
	<td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">Dear <b>{First Name}</b></td>
</tr>
<tr>
	<td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">Congratulations! We are pleased to inform you that subsequent to your interview with us, you have been selected for the position of the <strong>{PositionDescription}</strong>.</td>
</tr>
<tr>
	<td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">You will be working for AIQU, a part of <b>{CompanyName}</b> (“AIQU”) and you will be deputed with our client
            <strong>{ClientName}</strong>. You will initially be based in
            <strong>{WorkLocationDescription}</strong> however AIQU reserves the
            right to transfer you to any of our other clients or any other
            location within the UAE as per the client requirement on similar
            terms and conditions.</td>
</tr>
<tr>
    <td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">Projected Date of Joining: <b>{Expected Date}</b>.</td>
</tr>
<tr>
    <td style="font-size:14px;font-family: 'TimesNewRoman';font-weight:normal;">AIQU will be responsible to provide you with “employee care”, visa
            and payroll services. Your day-to-day responsibilities will be
            assigned and supervised by the client directly. You will be required
            to follow all rules and regulations of the client. Your employment
            will be based on the following terms and conditions in addition to
            those stated in the labor contract.</td>
</tr>
<tr>
    <td style="width:100%">
        <table cellpadding="3" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
            <tbody>
                <tr>
                    <td valign="top" style="width:3%;"><b>1.</b></td>    
                    <td style="width:97%"><b>Remuneration:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top">During your employment you will be paid a salary of AED
            <strong>{GrossSalaryMonth}</strong> per Daily. The salary will be
            calculated on the basis of work performed and stated in the approved
            time sheet, received by AIQU from the client.<br /></td>
                                </tr>
                                <tr>
                                    <td valign="top">In addition to the above, any incentives or bonus may be paid as per
            client’s discretion or if agreed to, separately in the annexure. The
            details of your remuneration and benefits are to be kept
            confidential.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>2.</b></td>    
                    <td style="width:97%"><b>Benefits:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a.</td>
                                    <td style="width: 97%;">Medical insurance for <strong>{medical_category}</strong> only under
            company’s Group Insurance Policy</td>
                                </tr>
                                <tr>
                                    <td valign="top">b.</td>
                                    <td>Gratuity as per UAE Labour Law.</td>
                                </tr>
                                <tr>
                                    <td valign="top">c.</td>
                                    <td><strong>{Workeddays}</strong> working days or
            <strong>{CalendarDays}</strong> calendar days paid leave as per
            UAE labor law.</td>
                                </tr>
                                <tr>
                                    <td valign="top">d.</td>
                                    <td>Economy air ticket to home country once every <strong>{AirTicketYears}</strong> limited to a maximum amount of AED <strong>{AirTicketAmount}</strong></td>
                                </tr>
                                <tr>
                                    <td valign="top">e.</td>
                                    <td>You will be entitled to sick leave as per the UAE labor law.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>3.</b></td>    
                    <td style="width:97%"><b>Probation:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 100%;">You will be on probation for a period of <b>{Period}</b> months from the date of joining. Any leaves taken during the Probation Period shall be unpaid leaves.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>4.</b></td>    
                    <td style="width:97%"><b>Notice Period and Termination:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a.</td>
                                    <td style="width: 97%;">During the probation period, AIQU may terminate your services with or without cause by giving&nbsp;<span style="font-weight: bolder;color: rgb(0, 0, 49);">{Notice_Period_prb}</span>&nbsp;notice. After probation period, AIQU may terminate your services by giving notice as per notice period mentioned in b).</td>
                                </tr>
                                <tr>
                                    <td valign="top">b.</td>
                                    <td>You may terminate your services with AIQU by giving notice as follows: <br>i) One week notice, if you have worked for more than 6 months but less than 1 year.<br>ii) Two weeks’ notice, if you have worked for at least 1 year. <br>iii) One month’s notice, if you have worked for at least 5 years. <br>In case you terminate your employment without giving notice, AIQU may in certain cases at its own discretion accept equivalent salary in lieu of notice period.</td>
                                </tr>
                                <tr>
                                    <td valign="top">c.</td>
                                    <td>In case if AIQU is required to incur certain expenses to
            facilitate your training and you are also desirous of
            undergoing such training to enhance your career growth, if
            you resign or terminate your employment with AIQU in less
            than one year, AIQU will recover training and onboarding
            expenses from your full and final settlement. This will be
            limited to one month’s salary.</td>
                                </tr>
                                <tr>
                                    <td valign="top">d.</td>
                                    <td>In case of any allegation of misconduct, fraud, gross
            negligence or any criminal act, or act of disobedience,
            insobriety, insubordination, or in case it is found that any
            information or academic qualification provided by you is
            false or misleading, your employment will be terminated with
            immediate effect by AIQU, in writing, without notice or end
            of service benefits.</td>
                                </tr>
                                <tr>
                                    <td valign="top">e.</td>
                                    <td>If you absent yourself for 7 consecutive or 20
            non-consecutive days without prior written permission; your
            employment shall be terminated without any notice.</td>
                                </tr>
                                <tr>
                                    <td valign="top">f.</td>
                                    <td>You must return all materials and properties including but
            not limited to documents, notes, memoranda, records, list of
            customers, suppliers and employees, correspondences,
            documents, computer and other CDs, data, discs codes,
            designs and drawings, and other documents whatsoever
            (whether made or created by you) belonging to or related to
            the client and AIQU on your resignation and termination or
            pay damages in lieu thereof.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>5.</b></td>    
                    <td style="width:97%"><b>Leave:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 100%;">Any leave including paid leave, which are accumulated and not
            utilized can be encashed as per policy. In case of any sick leave
            availed for more than 1 day, you will need to provide a medical
            certificate by the relevant government authority</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>6.</b></td>    
                    <td style="width:97%"><b>General Conditions:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 3%;">a.</td>
                                    <td style="width: 97%;">Your employment as aforesaid will become operative only when you first report to the client office.</td>
                                </tr>
                                <tr>
                                    <td valign="top">b.</td>
                                    <td>This offer is subject to successful processing of your visa
            and legal entry permits by the UAE Ministry of Labor and
            immigration authorities. This offer is also subject to
            obtaining a medical fitness certificate, background
            screening, police clearance certificate issued from your
            country of residence or nationality. This offer letter is
            further subject to a successful CID clearance in case the
            same is requested by the Client. In case any of these
            requirements are not met or the entry permit or the visa or
            CDI clearance is rejected for any reason, whatsoever, this
            offer letter will be construed as null and void. This offer
            letter is also subject to receipt of at least 2 satisfactory
            reference checks, the verification of the educational
            certificate and credentials submitted to AIQU and may be
            revoked if the aforesaid is not received and all expenses
            incurred by AIQU will be payable by you.</td>
                                </tr>
                                <tr>
                                    <td valign="top">c.</td>
                                    <td>The ‘Offer of Employment’ and this ‘Offer letter’ are
            subject to AIQU being in receipt of an offer for services
            from the client. Should the offer be withdrawn at any point
            by the client, and it is deemed as beyond the control of
            AIQU, then AIQU reserves the right to withdraw the offer to
            the candidate at any time prior to the onboarding date with
            no reason offered. No financial recompense will be paid by
            AIQU to you.</td>
                                </tr>
                                <tr>
                                    <td valign="top">d.</td>
                                    <td>In the event of your appearance at, or summons to appear at
            any criminal court, or in the event of any criminal
            conviction or civil order being made against you, either
            during the period of your employment with AIQU, or prior to
            joining AIQU you must inform AIQU as soon as possible and
            must on request give full details to AIQU.</td>
                                </tr>
                                <tr>
                                    <td valign="top">e.</td>
                                    <td>You accept and acknowledge that your personal information
            including but not limited to your passport, visa, etc.
            (“Personal information”) shall be stored by AIQU on
            cloud-based business application and you hereby agree that
            AIQU shall not be liable in the event that such Personal
            Information is retrieved, accessed, distributed or used with
            or without authorization by AIQU. You hereby fully indemnify
            and hold AIQU harmless for any liability arising from any
            and all claims, requests, debts, expenses, losses and
            actions in relation to any authorized or unauthorized
            access, retrieval, distribution or usage of your Personal
            Information.</td>
                                </tr>
                                <tr>
                                    <td valign="top">f.</td>
                                    <td>It is recommended that you take travel insurance for
            yourself (if you are currently outside UAE) or continue your
            existing insurance (if you are inside UAE) until your
            insurance is applied by AIQU.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>7.</b></td>    
                    <td style="width:97%"><b>Confidential information:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 100%;">By accepting this offer of employment, you irrevocably agree to keep
            information related to AIQU and its client confidential and private
            and not to communicate the same to any person including without
            limitation, information regarding the business and finances of the
            client or of AIQU. A separate non-disclosure agreement will be
            signed by you in this regard. This confidentiality clause will be
            binding on you even after your employment ends with AIQU for any
            reason whatsoever.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>8.</b></td>    
                    <td style="width:97%"><b>Prohibition to Take Up Employment:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 100%;">In the event of your resignation, you will not undertake to seek
            employment in the field of a competitor in the United Arab Emirates
            for two years, according to Article 127 of the law from the date of
            resignation without prior approval from AIQU.</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:3%;"><b>9.</b></td>    
                    <td style="width:97%"><b>Outside Occupation:</b><br /><br />
                        <table cellpadding="0" cellspacing="0" style="width: 100%;font-size:14px;font-family: 'TimesNewRoman';">
                            <tbody>
                                <tr>
                                    <td valign="top" style="width: 100%;">You are prohibited from working for any other employers, paid or
            unpaid, without a written consent of AIQU during your employment
            with AIQU.</td>
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
	<td style="font-weight: bold;font-size: 14px;font-family: 'TimesNewRoman';">
		Acknowledgement and Declaration: 
	</td>
</tr>
<tr>
	<td style="font-size: 14px;font-family: 'TimesNewRoman';">By signing a copy of this offer letter; I agree, acknowledge and confirm that: </td>
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
                                    <td valign="top" style="width: 3%;">a.</td>
                                    <td style="width: 97%;">I have no criminal records in the country of my origin or the UAE.</td>
                                </tr>
                                <tr>
                                    <td valign="top">b.</td>
                                    <td>I am liable to inform AIQU of my social status.</td>
                                </tr>
                                <tr>
                                    <td valign="top">c.</td>
                                    <td>I will keep AIQU and AIQU’s client information confidential at
            all times including the terms and conditions of this offer
            letter.</td>
                                </tr>
                                <tr>
                                    <td valign="top">d.</td>
                                    <td>I agree to abide by all the terms and conditions specified in
            this offer letter and acknowledge that these conditions are in
            addition to those generally specified in the UAE Labor contract.</td>
                                </tr>
                                <tr>
                                    <td valign="top">e.</td>
                                    <td>I will be responsible for breach of any of these conditions.</td>
                                </tr>
                                <tr>
                                    <td valign="top">f.</td>
                                    <td>This offer of employment may be revoked at AIQU’s discretion at
            any time.</td>
                                </tr>
                                <tr>
                                    <td valign="top">g.</td>
                                    <td>I am legally entitled to work, without any legal restriction
            imposed on me by a current or former employer.</td>
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
    <td style="width: 30%;"><strong>For AIQU, Top Talent Employment Services LLC :</strong><br><br>
        <div>
            <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/TopTalentEmploymentServices/TOP-TALENT-AIQU-SIGNATURE.png" alt="TASC-SIGNATURE" height="50">
        </div><br/><strong>Ramla Ahmed Al Ansari</strong><br><strong>Sr.Manager-Compliance Ops</strong>
    </td>
    <td style="text-align:center;width:25%;">
        <br><br><br>
        <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/TopTalentEmploymentServices/TTS_Stamp.png" alt="TASC-STAMP" height="100">
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
<table cellpadding="0" cellspacing="0" style="color: rgb(0, 0, 0); width: 100%; font-size: 10px; font-family: 'TimesNewRoman';"> 
    <tbody> 
        <tr>
            <td style="text-align: left;width:70%;"><br /><br /><strong>Offer Letter - English</strong><br>TASC-ECARE/SOP/ONB-OLM/FORMS/AIQU/001/F2(OLE) | Version: 00 | Date: {Date}<br></td>
            <td style="text-align: right;width:30%;"><br /><br />Page 1 of 4</td> 
        </tr>
    </tbody>
</table>
<table cellpadding="0" cellspacing="0" style="width:100%;">
    <tr>
        <td style="width:100%;">
            <img src="https://exalogic-store.s3.us-east-2.amazonaws.com/tasc/templates/AIQU-footer.png" style="height:160px" alt="TASC-AIQU-FOOTER">
        </td>
    </tr>
</table>

</body>
</html>