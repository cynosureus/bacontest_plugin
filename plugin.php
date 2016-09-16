<?php

/*
Plugin Name: Before & After Contest: Icon and SculpSure
Plugin URI: cynosure.com
Version: 1.0
Author: Chelsea Schaefer
Description: Landing page for doctors to submit before and after pictures of
patients who have received Icon and SculpSure treatments
*/

add_shortcode('b_a_contest', 'generate_b_a_contest_page');
function generate_b_a_contest_page()
{

    ?>
    <div class="bac_details">
        <p>You continue to provide your patients with the results they desire - now it's time to show them off! Cynosure will be giving <strong>$500 to physicians</strong> with the best before
            and after photos for Icon treatments with up to 5 winners selected each quarter.</p>
        <p>Winners will also be featured on Cynosure's social media pages.</p>
    </div>
    <div class="bac_select_laser_container">
        <select class="bac_select_laser" name="bac_select_laser" id="bac_select_laser">
            <option value="default">Select the device used in your before &amp; after images</option>
            <option value="sculpsure">SculpSure</option>
            <option value="icon">Icon</option>
        </select>
    </div>
    <div id="ss_contest_entry">
        <h2>SculpSure<sup>&reg;</sup> Photo Contest Entry Form</h2>
        <form id="sculpsure-contest-form" action="#">
          <div>
              <h3>Rules</h3>
              <section>
                  <div class="bacontest-official-rules-section">
                      <h2 class="contest-rules-header">SCULPSURE<sup>&reg;</sup> PHOTO CONTEST OFFICIAL RULES AND ENTRY FORM<br>NO PURCHASE NECESSARY</h2>
                      <p>This Contest of Skill (“Contest” or “Photo Contest”) is sponsored by Cynosure, Inc. (“Cynosure” or “Sponsor”).  By entering this Contest, you affirmatively agree to these official rules.  As specified in these rules, this Contest is open only to U.S. Citizens who are Licensed Practitioners.  The Contest is NOT open to Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law.  The Contest is NOT open to Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct. The purpose of this Contest is to reward Licensed Practitioners who are able to provide high quality before and after photographs showing the effects of treatment with a Cynosure SculpSure device.  To enter this Contest, participants must obtain all necessary patient consents; such consents are required even if the photographs do not show the patient’s face and do not reveal the patient’s identity.</p>
                      <p>The core elements of this Contest are summarized below:</p>
                      <p>Submit your SculpSure Before and After photos for a chance to win $500! SculpSure Photo Contest winners are chosen from submissions that:</p>
                      <ol>
                          <li>Fulfill requirements to Enter in compliance with the Official Rules;</li>
                          <li>Are judged to be a winning entry by a panel of Cynosure judges; and</li>
                          <li>Up to 10 winners will be selected once per quarter.</li>
                      </ol>
                      <p>There is no limit to the number of entries you can submit.</p>
                      <p class="official-rules"><strong>OFFICIAL RULES</strong></p>
                      <p><strong>ELIGIBILITY:</strong> No purchase is necessary.  The SculpSure Photo Contest is open only to individuals who are:</p>
                      <div class="eligibility-list">
                          <p>•	Licensed Practitioners practicing in the United States who are permitted to perform SculpSure treatments based upon the respective state licensure rules that govern their practice.  Licensed Practitioners licensed to perform SculpSure treatments can include Physicians, Physicians Assistants, Nurse Practitioners, Nurses, and Aestheticians, for example.</p>
                          <p>•	Legal United States residents;</p>
                          <p>•	Age eighteen (18) or older; and who submit Before and After photographs of patients treated with a Cynosure SculpSure device.</p>
                          <p>•	Licensed Practitioners who are not Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law; and</p>
                          <p>•	Licensed Practitioners who are not Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct.</p>
                      </div>
                      <p>Cynosure will resolve any eligibility questions in its sole discretion.</p>
                      <p><strong>SPONSOR:</strong> The Photo Contest is sponsored by Cynosure, Inc. 5 Carlisle Road, Westford, MA 01886.</p>
                      <p><strong>ENTRY PERIOD:</strong> Entries may be submitted during the period beginning at 12:00 a.m. Eastern Standard Time (“EST”) on October 1, 2016 and ending at 11:59 p.m. EST on September 30, 2017.  The Photo Contest will run quarterly, and each quarter shall consist of three months in a calendar year.  The quarter in which a submission is made will be determined by the date and time of submission, with each quarter ending at 11:59 p.m. EST on the last day of each quarter.  Cynosure’s computer is the official time-keeping device for the Photo Contest.  All entries must be in English and must provide the participant’s name, address, and telephone number.  All entries become the exclusive property of Cynosure and will not be acknowledged or returned.  Proof of submission will not be deemed to be proof of receipt by Cynosure.</p>
                      <p><strong>TO ENTER:</strong> Submit your high resolution digital before and after patient photographs online through our website at www.cynosure.com/photocontest/sculpsure by (1) completely filling in the Entry Form (below), which includes (a) ensuring that you can fulfill and affirm the Entry Criteria and (b) uploading your Before and After photos (below). By submitting an Entry Form, each submitter thereby agrees to the Official Rules of the Photo Contest.</p>
                      <p><strong>JUDGING AND CRITERIA:</strong> A panel of judges drawn in whole or in part from Cynosure’s marketing and creative staff will select the winning Before and After photos.  The judges may use a controlling point system evaluation scale using the following criteria:</p>
                      <ol>
                          <li>Impressive reduction in fat in the indicated treatment areas</li>
                      </ol>
                      <p>The decisions made by the judges shall be made in their sole discretion and shall be binding and final.  Cynosure reserves the right in its sole discretion to select and designate panels of judges and to modify the panels and/or the evaluation criteria over time.</p>
                      <p>By entering, you agree to be bound by these Official Rules, and you agree that the decisions of the judges are final and binding in all respects.  Up to 10 winners will be selected quarterly as follows:</p>
                      <p>October 1 - December 31, 2016<br>
                      January 1 - March 31, 2017<br>
                      April 1 - June 30, 2017<br>
                      July 1 - September 30, 2017</p>
                      <p>Judging will be completed and Photo Contest winners will be contacted within 30 days of the close of each calendar quarter.  If, in a particular quarter, none of the entries provides suitable high quality photographs, Cynosure also reserves the right not to select any winning submission. Cynosure reserves the right to terminate the Photo Contest at any time without notice.</p>
                      <p><strong>PUBLICATION OF PHOTOGRAPHS:</strong> Cynosure will only publish photos of winning submissions; provided, however that, entering a winning submission does not guarantee publication of entered photos.  To the extent practicable, any published photos will mask the identity of the patient; identifying facial features will be obscured, modified or blocked. Publication of such photographs will identify the Licensed Practitioner who is a Physician or, in the event that the Licensed Practitioner is a non-physician, the published photograph will identify the Licensed Practitioners’ Supervising Physician. <strong>OPT-OUT RIGHTS FOR ENTRANTS:</strong>  Entrants may opt out from this Contest at any time by sending a notice of withdrawal to the following email address: <a href="mailto:contests@cynosure.com">contests@cynosure.com</a>.  In connection with any such withdrawal, the Official Rules remain in effect.</p>
                      <p><strong>SELECTION OF CONTEST WINNER:</strong>  The winner will be selected from all eligible entries.  Cynosure will contact the potential winner via email.  If the potential winner cannot be contacted or does not respond within five (5) days after the date of the email being sent or does not accept the prize, Cynosure may select an alternative potential winner in his/her place from among the remaining non-winning eligible entries.  Upon acceptance of the prize by the winner and completion of any necessary Declaration of Compliance, Cynosure will deliver the prize within four (4) weeks after the winner is selected.  Cynosure will announce the name of the winner only after the prize has been awarded.</p>
                      <p><strong>WINNER NOTIFICATION:</strong> The potential winner(s) will be contacted and announced by Cynosure as explained above.  In order to claim the prize, the potential winner may be required by Cynosure to complete and submit a Declaration of Compliance within five (5) days of potential winner responding to Cynosure’s contact and in order to claim the prize.  If the potential winner fails to complete the Declaration of Compliance, cannot be contacted, does not respond to Cynosure’s email contact, or does not accept the prize, the potential winner forfeits the prize.  Any winner per quarter will be announced via at least one social media channel.  Where there is no announcement of a winner for a given quarter, there was no winner in that quarter.</p>
                      <p><strong>PRIZE:</strong> The winners will receive a cash payment of five hundred dollars ($500.00).</p>
                      <p><strong>ODDS OF WINNING:</strong>  The odds of winning depend upon the number of eligible entries received.  Cynosure cannot determine how many entries will be received in each quarter.</p>
                      <p><strong>GENERAL:</strong></p>
                      <p>The Photo Contest is subject to federal, state, and local laws and regulations and is void where prohibited.  Cynosure reserves the right to cancel or suspend the Contest without notice for any reason at its sole discretion.  If Cynosure determines in its sole discretion to suspend the Contest, Cynosure may resume the Contest in a manner that best conforms to the spirit of these Official Rules.</p>
                      <p>The Contest is not available to Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law and the Contest is not available to Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct.</p>
                      <p>Cynosure reserves the right in its sole discretion to disqualify any individual it finds to be tampering with the entry process or operation of the Contest or to be acting in violation of these Official Rules or in an unsportsmanlike or disruptive manner.</p>
                      <p>Any attempt by an entrant or any other individual to undermine the legitimate operation of the Contest may be in violation of criminal and civil laws and, should such an attempt be made, Cynosure reserves the right to seek any and all remedies available from any such person to the fullest extent permitted by law, including criminal prosecution.</p>
                      <p>By entering the Contest, all entrants grant Cynosure an irrevocable, royalty-free, exclusive license in the medical device field and sub licensable to Cynosure customers to use, modify, reproduce, create derivatives of, distribute, compile, organize, transcribe and transmit, in printed or electronic form or in any form now known or hereafter developed, the uploaded photographs submitted herein together with your Licensed Practitioner Physician name and/or Supervising Physician name and/or Practice Name and expressly waive all of their rights under the U.S. Copyright Act for their use in the medical device field in favor of Cynosure and all Cynosure customers.</p>
                      <p>Failure by Cynosure to enforce any provision of these Official Rules shall not constitute a waiver of that provision.</p>
                      <p>Cynosure is not responsible if the prize cannot be awarded due to Acts of God, acts of war, natural disasters, weather, acts of terrorism, or other conditions beyond Cynosure’s control.</p>
                      <p><strong>RELEASE AND LIMITATIONS OF LIABILITY:</strong></p>
                      <ol class="lower-alpha-list">
                          <li>Entrants release and hold harmless Cynosure, each of its affiliates, subsidiaries, parent corporations, and their respective officers, directors, shareholders, employees and agents, from any claims, actions, injury, loss, or damage of any kind, resulting, directly or indirectly, in whole or in part, from participating in this Contest or from the acceptance, possession, or use or misuse of a prize.  Entrants may not recover or seek to recover consequential damages, punitive damages, or special damages of any kind.</li>
                          <li>Cynosure assumes no liability for lost or misdirected entries, whether due to technical or computer malfunctions or otherwise, fraud, or other errors.</li>
                          <li>This limitation of liability is a comprehensive limitation of liability that applies to all damages of any kind, including (without limitation) compensatory, direct, indirect, or consequential damages; loss of data, income or profit; loss of damage to property; and claims of third parties.</li>
                          <li>Entrants agree that Cynosure has not made nor is in any manner responsible or liable for any warranty, representation, or guarantee, statutory, express or implied (including but not limited to, the implied warranties of merchantability, title, and fitness for a particular purpose), in fact or in law, relative to the Contest.</li>
                      </ol>
                      <p><strong>ENTIRE AGREEMENT:</strong>  These Official Rules constitute the entire agreement and understanding between Cynosure and you and supersede all prior agreements and understandings, written and oral, relating to the subject matter hereof.  If any provision of the Official Rules is declared or found by a court of competent jurisdiction to be illegal, unenforceable or void, then such provision will be null and void, but each other provision hereof not so affected will be enforced to the full extent permitted by applicable law.</p>
                      <p><strong>TAXES:</strong> Up to 10 winners are eligible to receive a $500 prize.  All winners are responsible for paying any income taxes and any and all other costs and expenses not listed above. If the prize value you are awarded in a calendar year equals or exceeds $600, a winner will need to complete, sign and return an IRS W-9 form prior the award of the prize. Any prize details not specified above will be determined by Cynosure, in its sole discretion. A prize may not be transferred and must be accepted as awarded.</p>
                      <p><strong>NO PURCHASE NECESSARY:</strong>  No purchase or payment of any kind is necessary to enter or win this contest.</p>
                      <p><strong>DISPUTES:</strong> Any and all disputes, claims and causes of action arising out of, or connected with, the Contest or any prize shall be resolved individually, without resort to any form of class action, and exclusively by the appropriate court located in the Commonwealth of Massachusetts. All issues and questions concerning the construction, validity, interpretation and enforceability of these Official Rules, your rights and obligations, or the rights and obligations of Cynosure in connection with the Contest, shall be governed by, and construed in accordance with, the laws of the Commonwealth of Massachusetts, without giving effect to any choice of law or conflict of law rules (whether of the Commonwealth of Massachusetts or any other jurisdiction), which would cause the application of the laws of any jurisdiction other than the Commonwealth of Massachusetts.</p>
                      <p><strong>PRIVACY POLICY:</strong> Any personally identifiable information collected during participation in the Contest will be collected by Cynosure, Inc., for purposes of the proper administration and fulfillment of the Contest as described in these Official Rules and, where permitted by law, in accordance with the Sponsor’s Privacy Policy, as stated at <a href="http://www.cynosure.com/privacy-policy/" target="_blank">http://www.cynosure.com/privacy-policy/</a></p>
                  </div>
                  <div class="accept-official-rules">
                      <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I have read and understood the Official Rules. </label>
                  </div>
              </section>
              <h3>Practice Details</h3>
              <section>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceName">Practice Name *</label>
                      <input id="ss_practiceName" name="ss_practiceName" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceAddress">Practice Address *</label>
                      <input id="ss_practiceAddress" name="ss_practiceAddress" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceCity">Practice City *</label>
                      <input id="ss_practiceCity" name="ss_practiceCity" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceState">Practice State/Province *</label>
                      <input id="ss_practiceState" name="ss_practiceState" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practicePostalCode">Practice Postal Code*</label>
                      <input id="ss_practicePostalCode" name="ss_practicePostalCode" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_licensedPractitioner">Licensed Practitioner Name *</label>
                      <input id="ss_licensedPractitioner" name="ss_licensedPractitioner" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_supervisingPhysician">Supervising Physician Name*</label>
                      <input id="ss_supervisingPhysician" name="ss_supervisingPhysician" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_submitterName">Submitter Name *</label>
                      <input id="ss_submitterName" name="ss_submitterName" type="text" class="required">
                      <p>
                          (If the submitter is different from the Licensed Practitioner, the submitter must be working under the direction and authority of
                          and with permission to sign on behalf of the Licensed Practitioner)
                      </p>
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_licensedPractitionerEmail">Licensed Practitioner Email *</label>
                      <input id="ss_licensedPractitionerEmail" name="ss_licensedPractitionerEmail" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_submitterEmail">Submitter Email *</label>
                      <input id="ss_submitterEmail" name="ss_submitterEmail" type="text" class="required">
                  </div>

                  <p>(*) Mandatory</p>
              </section>
              <h3>Entry Criteria</h3>
              <section>
                  <p>To be eligible to Enter the SculpSure Photo Contest the following Entry Criteria must be met or agreed to:</p>

                  <div class="entry-criteria-section">
                        <div class="entry-criteria-group">
                            <p>Crisp, clear images with discernible reduction in fat. Images having: a consistent viewpoint and distance and consistent lighting and background.</p>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Licensed Practitioner is NOT a Vermont health care provider pursuant to Vermont’s Prescribed Products Gift Ban and Disclosure Law.</p>
                            <input id="ss_checkbox_1" name="ss_checkbox_1" type="checkbox" class="required"> <label for="ss_checkbox_1">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>Licensed Practitioner is NOT a person authorized to prescribe or purchase a medical device in the State of Massachusetts also called a “Covered Recipient” under the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct?</p>
                            <input id="ss_checkbox_2" name="ss_checkbox_2" type="checkbox" class="required"> <label for="ss_checkbox_2">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter is the Licensed Practitioner or is working under the direction and authority of and with permission to sign on behalf of the Licensed Practitioner.</p>
                            <input id="ss_checkbox_3" name="ss_checkbox_3" type="checkbox" class="required"> <label for="ss_checkbox_3">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter agrees to be bound by the SculpSure Photo Contest Official Rules.  </p>
                            <input id="ss_checkbox_4" name="ss_checkbox_4" type="checkbox" class="required"> <label for="ss_checkbox_4">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>High-resolution, unedited digital photos.</p>
                            <input id="ss_checkbox_5" name="ss_checkbox_5" type="checkbox" class="required"> <label for="ss_checkbox_5">I agree, photos are unedited. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The patient that is the Subject of the entered photos is over 18 years of age and has irrevocably consented to the entered photos being used and distributed including for marketing and promotional purposes. </p>
                            <input id="ss_checkbox_6" name="ss_checkbox_6" type="checkbox" class="required"> <label for="ss_checkbox_6">I agree. You must provide a copy of the patient consent to Cynosure upon request.</label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter agrees to the following License Agreement for use of the photos:
                            By submitting this entry form, you hereby represent and affirm that you, the Submitter, own or have the rights to convey any and all right and title in any material submitted as part of your entry into the SculpSure Photo Contest. By submitting your photos and participating in the  SculpSure Photo Contest and for good and valuable consideration, the receipt and sufficiency of which is acknowledged, the Submitter hereby grants to Cynosure an irrevocable, royalty-free, exclusive license, in the medical device field and sub licensable to Cynosure customers, to use, modify, reproduce, create derivatives of, distribute, compile, organize, transcribe and transmit, in printed or electronic form or in any form now known or hereafter developed, the uploaded photographs submitted herein together with the Supervising Physician name and/or Licensed Practitioner name and/or Practice Name.  By participating in the SculpSure Photo Contest the Submitter: (a) warrants and represents that he/she/it has the full power to enter into this License Agreement and to grant the rights provided herein and that the exercise by Cynosure of such rights shall not infringe or adversely affect the rights of others, (b) expressly waives all of rights under the U.S. Copyright Act for the use of the material use in the medical device field in favor of Cynosure and all Cynosure customers, (c) releases and discharges Cynosure and its affiliates, and its and their officers, agents, employees, successors and assigns from any and all claims or demands arising out of or connected with use of said works in accordance with this License Agreement, (d) indemnifies Cynosure against any claims brought in connection with the works for invasion of privacy, violation of rights of publicity, or infringement of intellectual property, and (e) understands that Cynosure may or may not, in Cynosure’s sole discretion, give attribution as to the source of any such work. </p>
                            <input id="ss_checkbox_7" name="ss_checkbox_7" type="checkbox" class="required"> <label for="ss_checkbox_7">I agree. </label>
                        </div>
                  </div>
              </section>

              <h3>Treatment Details</h3>
              <section>
                  <p>To be eligible to Enter the SculpSure Photo Contest the following Entry Criteria must be met or agreed to:</p>
                  <p>Disclosure of the Treatment Details, specified below, associated with the submitted photos.</p>
                  <div class="bacontest-field-group treatment-group">
                      <label for="ss_numTreatments">Number of treatments *</label>
                      <input id="ss_numTreatments" name="ss_numTreatments" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="ss_numApplicators">Number of applicators used per treatment *</label>
                      <input id="ss_numApplicators" name="ss_numApplicators" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="ss_treatmentArea">Area where treatment was performed *</label>
                      <input id="ss_treatmentArea" name="ss_treatmentArea" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="ss_treatmentTime">Time elapsed after the last treatment performed *</label>
                      <input id="ss_treatmentTime" name="ss_treatmentTime" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="ss_treatmentComments">Please add any comments regarding the history or satisfaction of the patient that is
                          the subject of the entered photos *</label>
                      <textarea id="ss_treatmentComments" name="ss_treatmentComments" class="required" rows="4" cols="60" style="color:grey"></textarea>
                  </div>
                  <p>(*) Mandatory</p>
              </section>
              <h3>Upload Photos</h3>
              <section>
                  <p>Upload before and after photo as separate files, having file types JPG or PNG indicating in the file path ‘before’ or ‘after’:</p>
                    <label for="ss_before_image" class="custom-file-upload-btn">
                        UPLOAD BEFORE IMAGE
                    </label>
                    <p><input id="ss_before_image" type="file" accept='image/*' size="27"/></p>

                    <label for="ss_after_image" class="custom-file-upload-btn">
                        UPLOAD AFTER IMAGE
                    </label>
                    <p><input id="ss_after_image" type="file" accept='image/*' size="27"/></p>

                    By clicking SUBMIT you certify that all information provided herein is accurate and is to the best of your knowledge and you Agree that you understand, agree with and are subject to the Official Rules.
              </section>
          </div>
        </form>
    </div>
    <!-- <div id="icon_contest_entry">
        <h2>Icon Photo Contest Entry Form</h2>
        <form id="icon-contest-form" action="#">
          <div>
              <h3>Rules</h3>
              <section>
                  <div class="bacontest-official-rules-section">
                      <h2 class="contest-rules-header">ICON<sup>&reg;</sup> PHOTO CONTEST OFFICIAL RULES AND ENTRY FORM<br>NO PURCHASE NECESSARY</h2>
                      <p>This Contest of Skill (“Contest” or “Photo Contest”) is sponsored by Cynosure, Inc. (“Cynosure” or “Sponsor”).  By entering this Contest, you affirmatively agree to these official rules.  As specified in these rules, this Contest is open only to U.S. Citizens who are Licensed Practitioners.  The Contest is NOT open to Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law.  The Contest is NOT open to Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct. The purpose of this Contest is to reward Licensed Practitioners who are able to provide high quality before and after photographs showing the effects of treatment with a Cynosure Icon device.  To enter this Contest, participants must obtain all necessary patient consents; such consents are required even if the photographs do not show the patient’s face and do not reveal the patient’s identity.</p>
                      <p>The core elements of this Contest are summarized below:</p>
                      <p>Submit your Icon Before and After photos for a chance to win $500! Icon Photo Contest winners are chosen from submissions that:</p>
                      <ol>
                          <li>Fulfill requirements to Enter in compliance with the Official Rules;</li>
                          <li>Are judged to be a winning entry by a panel of Cynosure judges; and</li>
                          <li>Up to 5 winners will be selected once per quarter.</li>
                      </ol>
                      <p>There is no limit to the number of entries you can submit.</p>
                      <p class="official-rules"><strong>OFFICIAL RULES</strong></p>
                      <p><strong>ELIGIBILITY:</strong> No purchase is necessary.  The Icon Photo Contest is open only to individuals who are:</p>
                      <div class="eligibility-list">
                          <p>•	Licensed Practitioners practicing in the United States who are permitted to perform Icon treatments based upon the respective state licensure rules that govern their practice.  Licensed Practitioners licensed to perform Icon treatments can include Physicians, Physicians Assistants, Nurse Practitioners, Nurses, and Aestheticians, for example. </p>
                          <p>•	Legal United States residents;</p>
                          <p>•	Age eighteen (18) or older; and who submit Before and After photographs of patients treated with a Cynosure Icon device.  </p>
                          <p>•	Licensed Practitioners who are not Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law; and </p>
                          <p>•	Licensed Practitioners who are not Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct.</p>
                      </div>
                      <p>Cynosure will resolve any eligibility questions in its sole discretion.</p>
                      <p><strong>SPONSOR:</strong> The Photo Contest is sponsored by Cynosure, Inc. 5 Carlisle Road, Westford, MA 01886.</p>
                      <p><strong>ENTRY PERIOD:</strong> Entries may be submitted during the period beginning at 12:00 a.m. Eastern Standard Time (“EST”) on October 1, 2016 and ending at 11:59 p.m. EST on September 30, 2017. The Photo Contest will run quarterly, and each quarter shall consist of three months in a calendar year.  The quarter in which a submission is made will be determined by the date and time of submission, with each quarter ending at 11:59 p.m. EST on the last day of each quarter.  Cynosure’s computer is the official time-keeping device for the Photo Contest.  All entries must be in English and must provide the participant’s name, address, and telephone number.  All entries become the exclusive property of Cynosure and will not be acknowledged or returned.  Proof of submission will not be deemed to be proof of receipt by Cynosure.</p>
                      <p><strong>TO ENTER:</strong> Submit your high resolution digital before and after patient photographs online through our website at www.cynosure.com/photocontest/icon by (1) completely filling in the Entry Form (below), which includes (a) ensuring that you can fulfill and affirm the Entry Criteria and (b) uploading your Before and After photos (below). By submitting an Entry Form, each submitter thereby agrees to the Official Rules of the Photo Contest.</p>
                      <p><strong>JUDGING AND CRITERIA:</strong> A panel of judges drawn in whole or in part from Cynosure’s marketing and creative staff will select the winning Before and After photos.  The judges may use a controlling point system evaluation scale using the following criteria:</p>

                      <table id="icon-judging-criteria">
                          <tr>
                              <th class="icon-skin-condotion">Skin Revitalization</th>
                              <th class="icon-skin-condotion">Hair Removal</th>
                              <th class="icon-skin-condotion">Vein Treatment</th>
                              <th class="icon-skin-condotion">Scars/Stretch Marks</th>
                          </tr>
                          <tr>
                              <td>
                                  <p>Clear reduction of pigmentation, wrinkles and/or vessels (where applicable)</p>
                                  <p>Noticeable improvement in the skin texture over the area of treatment. </p>
                                  <p>Noticeable improvement in the skin tone over the area of treatment.</p>
                              </td>
                              <td>
                                  <p>Clear reduction in hair thickness in area of treatment.</p>
                                  <p>Clear reduction in hair density in area of treatment. </p>
                              </td>
                              <td>
                                  <p>Clear reduction of visible red and/or blue vessels in the area of treatment. </p>
                                  <p>Noticeable improvement in the skin tone over the area of treatment.</p>
                              </td>
                              <td>
                                  <p>Noticeable improvement in the skin tone over the area of the scar or stretch mark. </p>
                                  <p>Noticeable improvement in the skin texture over the area of the scar or stretch mark.</p>
                              </td>
                          </tr>
                      </table>

                      <p>The decisions made by the judges shall be made in their sole discretion and shall be binding and final.  Cynosure reserves the right in its sole discretion to select and designate panels of judges and to modify the panels and/or the evaluation criteria over time.</p>
                      <p>By entering, you agree to be bound by these Official Rules, and you agree that the decisions of the judges are final and binding in all respects.  Up to 5 winners will be selected quarterly as follows:</p>
                      <p>October 1 - December 31, 2016<br>
                      January 1 - March 31, 2017<br>
                      April 1 - June 30, 2017<br>
                      July 1 - September 30, 2017</p>
                      <p>Judging will be completed and Photo Contest winners will be contacted within 30 days of the close of each calendar quarter.  If, in a particular quarter, none of the entries provides suitable high quality photographs, Cynosure also reserves the right not to select any winning submission. Cynosure reserves the right to terminate the Photo Contest at any time without notice.</p>
                      <p><strong>PUBLICATION OF PHOTOGRAPHS:</strong> Cynosure will only publish photos of winning submissions; provided, however that, entering a winning submission does not guarantee publication of entered photos.  To the extent practicable, any published photos will mask the identity of the patient; identifying facial features will be obscured, modified or blocked. Publication of such photographs will identify the Licensed Practitioner who is a Physician or, in the event that the Licensed Practitioner is a non-physician, the published photograph will identify the Licensed Practitioners’ Supervising Physician. <strong>OPT-OUT RIGHTS FOR ENTRANTS:</strong>  Entrants may opt out from this Contest at any time by sending a notice of withdrawal to the following email address: <a href="mailto:contests@cynosure.com">contests@cynosure.com</a>.  In connection with any such withdrawal, the Official Rules remain in effect.</p>
                      <p><strong>SELECTION OF CONTEST WINNER:</strong>  The winner will be selected from all eligible entries.  Cynosure will contact the potential winner via email.  If the potential winner cannot be contacted or does not respond within five (5) days after the date of the email being sent or does not accept the prize, Cynosure may select an alternative potential winner in his/her place from among the remaining non-winning eligible entries.  Upon acceptance of the prize by the winner and completion of any necessary Declaration of Compliance, Cynosure will deliver the prize within four (4) weeks after the winner is selected.  Cynosure will announce the name of the winner only after the prize has been awarded.</p>
                      <p><strong>WINNER NOTIFICATION:</strong> The potential winner(s) will be contacted and announced by Cynosure as explained above.  In order to claim the prize, the potential winner may be required by Cynosure to complete and submit a Declaration of Compliance within five (5) days of  potential winner responding to Cynosure’s contact and in order to claim the prize.  If the potential winner fails to complete the Declaration of Compliance, cannot be contacted, does not respond to Cynosure’s email contact, or does not accept the prize, the potential winner forfeits the prize.  Any winner per quarter will be announced via at least one Cynosure social media channel. Where there is no announcement of a winner for a given quarter, there was no winner in that quarter.</p>
                      <p><strong>PRIZE:</strong> The winners will receive a cash payment of five hundred dollars ($500.00).</p>
                      <p><strong>ODDS OF WINNING:</strong>  The odds of winning depend upon the number of eligible entries received.  Cynosure cannot determine how many entries will be received in each quarter.</p>
                      <p><strong>GENERAL:</strong></p>
                      <p>The Photo Contest is subject to federal, state, and local laws and regulations and is void where prohibited.  Cynosure reserves the right to cancel or suspend the Contest without notice for any reason at its sole discretion.  If Cynosure determines in its sole discretion to suspend the Contest, Cynosure may resume the Contest in a manner that best conforms to the spirit of these Official Rules. </p>
                      <p>The Contest is not available to Vermont health care providers as defined by Vermont’s Prescribed Products Gift Ban and Disclosure Law and the Contest is not available to Covered Recipients as defined by the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct.</p>
                      <p>Cynosure reserves the right in its sole discretion to disqualify any individual it finds to be tampering with the entry process or operation of the Contest or to be acting in violation of these Official Rules or in an unsportsmanlike or disruptive manner.  </p>
                      <p>Any attempt by an entrant or any other individual to undermine the legitimate operation of the Contest may be in violation of criminal and civil laws and, should such an attempt be made, Cynosure reserves the right to seek any and all remedies available from any such person to the fullest extent permitted by law, including criminal prosecution. </p>
                      <p>By entering the Contest, all entrants grant Cynosure an irrevocable, royalty-free, exclusive license in the medical device field and sub licensable to Cynosure customers to use, modify, reproduce, create derivatives of, distribute, compile, organize, transcribe and transmit, in printed or electronic form or in any form now known or hereafter developed, the uploaded photographs submitted herein together with your Licensed Practitioner Physician name and/or Supervising Physician name and/or Practice Name and expressly waive all of their rights under the U.S. Copyright Act for their use in the medical device field in favor of Cynosure and all Cynosure customers. </p>
                      <p>Failure by Cynosure to enforce any provision of these Official Rules shall not constitute a waiver of that provision.</p>
                      <p>Cynosure is not responsible if the prize cannot be awarded due to Acts of God, acts of war, natural disasters, weather, acts of terrorism, or other conditions beyond Cynosure’s control. </p>
                      <p><strong>RELEASE AND LIMITATIONS OF LIABILITY:</strong></p>
                      <ol class="lower-alpha-list">
                          <li>Entrants release and hold harmless Cynosure, each of its affiliates, subsidiaries, parent corporations, and their respective officers, directors, shareholders, employees and agents, from any claims, actions, injury, loss, or damage of any kind, resulting, directly or indirectly, in whole or in part, from participating in this Contest or from the acceptance, possession, or use or misuse of a prize.  Entrants may not recover or seek to recover consequential damages, punitive damages, or special damages of any kind.</li>
                          <li>Cynosure assumes no liability for lost or misdirected entries, whether due to technical or computer malfunctions or otherwise, fraud, or other errors. </li>
                          <li>This limitation of liability is a comprehensive limitation of liability that applies to all damages of any kind, including (without limitation) compensatory, direct, indirect, or consequential damages; loss of data, income or profit; loss of damage to property; and claims of third parties. </li>
                          <li>Entrants agree that Cynosure has not made nor is in any manner responsible or liable for any warranty, representation, or guarantee, statutory, express or implied (including but not limited to, the implied warranties of merchantability, title, and fitness for a particular purpose), in fact or in law, relative to the Contest.  </li>
                      </ol>
                      <p><strong>ENTIRE AGREEMENT:</strong>These Official Rules constitute the entire agreement and understanding between Cynosure and you and supersede all prior agreements and understandings, written and oral, relating to the subject matter hereof.  If any provision of the Official Rules is declared or found by a court of competent jurisdiction to be illegal, unenforceable or void, then such provision will be null and void, but each other provision hereof not so affected will be enforced to the full extent permitted by applicable law. </p>
                      <p><strong>TAXES:</strong> Up to 5 winners are eligible to receive a $500 prize.  All winners are responsible for paying any income taxes and any and all other costs and expenses not listed above. If the prize value awarded in a calendar year equals or exceeds $600, a winner will need to complete, sign and return an IRS W-9 form prior the award of the prize. Any prize details not specified above will be determined by Cynosure, in its sole discretion. A prize may not be transferred and must be accepted as awarded.</p>
                      <p><strong>NO PURCHASE NECESSARY:</strong>  No purchase or payment of any kind is necessary to enter or win this contest.</p>
                      <p><strong>DISPUTES:</strong> Any and all disputes, claims and causes of action arising out of, or connected with, the Contest or any prize shall be resolved individually, without resort to any form of class action, and exclusively by the appropriate court located in the Commonwealth of Massachusetts. All issues and questions concerning the construction, validity, interpretation and enforceability of these Official Rules, your rights and obligations, or the rights and obligations of Cynosure in connection with the Contest, shall be governed by, and construed in accordance with, the laws of the Commonwealth of Massachusetts, without giving effect to any choice of law or conflict of law rules (whether of the Commonwealth of Massachusetts or any other jurisdiction), which would cause the application of the laws of any jurisdiction other than the Commonwealth of Massachusetts.</p>
                      <p><strong>PRIVACY POLICY:</strong> Any personally identifiable information collected during participation in the Contest will be collected by Cynosure, Inc., for purposes of the proper administration and fulfillment of the Contest as described in these Official Rules and, where permitted by law, in accordance with the Sponsor’s Privacy Policy, as stated at <a href="http://www.cynosure.com/privacy-policy/" target="_blank">http://www.cynosure.com/privacy-policy/</a></p>
                  </div>
                  <div class="accept-official-rules">
                      <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I have read and understood the Official Rules. </label>
                  </div>
              </section>
              <h3>Practice Details</h3>
              <section>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceName">Practice Name *</label>
                      <input id="ss_practiceName" name="ss_practiceName" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceAddress">Practice Address *</label>
                      <input id="ss_practiceAddress" name="ss_practiceAddress" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceCity">Practice City *</label>
                      <input id="ss_practiceCity" name="ss_practiceCity" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practiceState">Practice State/Province *</label>
                      <input id="ss_practiceState" name="ss_practiceState" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_practicePostalCode">Practice Postal Code*</label>
                      <input id="ss_practicePostalCode" name="ss_practicePostalCode" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_licensedPractitioner">Licensed Practitioner Name *</label>
                      <input id="ss_licensedPractitioner" name="ss_licensedPractitioner" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_supervisingPhysician">Supervising Physician Name*</label>
                      <input id="ss_supervisingPhysician" name="ss_supervisingPhysician" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_submitterName">Submitter Name *</label>
                      <input id="ss_submitterName" name="ss_submitterName" type="text" class="required">
                      <p>
                          (If the submitter is different from the Licensed Practitioner, the submitter must be working under the direction and authority of
                          and with permission to sign on behalf of the Licensed Practitioner)
                      </p>
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_licensedPractitionerEmail">Licensed Practitioner Email *</label>
                      <input id="ss_licensedPractitionerEmail" name="ss_licensedPractitionerEmail" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group">
                      <label for="ss_submitterEmail">Submitter Email *</label>
                      <input id="ss_submitterEmail" name="ss_submitterEmail" type="text" class="required">
                  </div>

                  <p>(*) Mandatory</p>
              </section>
              <h3>Entry Criteria</h3>
              <section>
                  <p>To be eligible to Enter the Icon Photo Contest the following Entry Criteria must be met or agreed to:</p>

                  <div class="entry-criteria-section">
                        <div class="entry-criteria-group">
                            <p>Crisp, clear images with discernible treatment results. Images having: a consistent viewpoint and distance and consistent lighting and background, as determined by Cynosure. </p>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Licensed Practitioner is NOT a Vermont health care provider pursuant to Vermont’s Prescribed Products Gift Ban and Disclosure Law.</p>
                            <input id="icon_checkbox_1" name="icon_checkbox_1" type="checkbox" class="required"> <label for="icon_checkbox_1">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>Licensed Practitioner is NOT a person authorized to prescribe or purchase a medical device in the State of Massachusetts also called a “Covered Recipient” under the Massachusetts Pharmaceutical and Medical Device Manufacturer Code of Conduct? </p>
                            <input id="icon_checkbox_2" name="icon_checkbox_2" type="checkbox" class="required"> <label for="icon_checkbox_2">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter is the Licensed Practitioner or is working under the direction and authority of and with permission to sign on behalf of the Licensed Practitioner. </p>
                            <input id="icon_checkbox_3" name="icon_checkbox_3" type="checkbox" class="required"> <label for="icon_checkbox_3">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter agrees to be bound by the Icon Photo Contest Official Rules.  </p>
                            <input id="icon_checkbox_4" name="icon_checkbox_4" type="checkbox" class="required"> <label for="icon_checkbox_4">I agree. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>High-resolution, unedited digital photos. </p>
                            <input id="icon_checkbox_5" name="icon_checkbox_5" type="checkbox" class="required"> <label for="icon_checkbox_5">I agree, photos are unedited. </label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The patient that is the Subject of the entered photos is over 18 years of age and has irrevocably consented to the entered photos (including his/her recognizable face where applicable) being used and distributed including for marketing and promotional purposes.  </p>
                            <input id="icon_checkbox_6" name="icon_checkbox_6" type="checkbox" class="required"> <label for="icon_checkbox_6">I agree. You must provide a copy of the patient consent to Cynosure upon request.</label>
                        </div>
                        <div class="entry-criteria-group">
                            <p>The Submitter agrees to the following License Agreement for use of the photos:
                            By submitting this entry form, you hereby represent and affirm that you, the Submitter, own or have the rights to convey any and all right and title in any material submitted as part of your entry into the Icon Photo Contest. By submitting your photos and participating in the  Icon Photo Contest and for good and valuable consideration, the receipt and sufficiency of which is acknowledged, the Submitter hereby grants to Cynosure an irrevocable, royalty-free, exclusive license, in the medical device field and sub licensable to Cynosure customers, to use, modify, reproduce, create derivatives of, distribute, compile, organize, transcribe and transmit, in printed or electronic form or in any form now known or hereafter developed, the uploaded photographs submitted herein together with the Supervising Physician name and/or Licensed Practitioner name and/or Practice Name.  By participating in the Icon Photo Contest the Submitter: (a) warrants and represents that he/she/it has the full power to enter into this License Agreement and to grant the rights provided herein and that the exercise by Cynosure of such rights shall not infringe or adversely affect the rights of others, (b) expressly waives all of rights under the U.S. Copyright Act for the use of the material use in the medical device field in favor of Cynosure and all Cynosure customers, (c) releases and discharges Cynosure and its affiliates, and its and their officers, agents, employees, successors and assigns from any and all claims or demands arising out of or connected with use of said works in accordance with this License Agreement, (d) indemnifies Cynosure against any claims brought in connection with the works for invasion of privacy, violation of rights of publicity, or infringement of intellectual property, and (e) understands that Cynosure may or may not, in Cynosure’s sole discretion, give attribution as to the source of any such work. </p>
                            <input id="icon_checkbox_7" name="icon_checkbox_7" type="checkbox" class="required"> <label for="icon_checkbox_7">I agree. </label>
                        </div>
                  </div>
              </section>

              <h3>Treatment Details</h3>
              <section>
                  <p>To be eligible to Enter the Icon Photo Contest the following Entry Criteria must be met or agreed to:</p>
                  <p>Disclosure of the Treatment Details, specified below, associated with the submitted photos.</p>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_numTreatments">Number of treatments *</label>
                      <input id="icon_numTreatments" name="icon_numTreatments" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_hand_pieces">Icon hand piece(s) used *</label>
                      <input id="icon_hand_pieces" name="icon_hand_pieces" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_treatmentArea">Area where treatment was performed *</label>
                      <input id="icon_treatmentArea" name="icon_treatmentArea" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_treatmentTime">Time elapsed after the last treatment performed  *</label>
                      <input id="icon_treatmentTime" name="icon_treatmentTime" type="text" class="required">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_settings">Settings used  *</label>
                      <input id="icon_settings" name="icon_settings" type="text">
                  </div>
                  <div class="bacontest-field-group treatment-group">
                      <label for="icon_treatmentComments">Please add any comments regarding the history or satisfaction of the patient that is
                          the subject of the entered photos *</label>
                      <textarea id="icon_treatmentComments" name="icon_treatmentComments" class="required" rows="4" cols="60" style="color:grey"></textarea>
                  </div>
                  <p>(*) Mandatory</p>
              </section>
              <h3>Upload Photos</h3>
              <section>
                  <p>Upload before and after photo as separate files, having file types JPG or PNG indicating in the file path ‘before’ or ‘after’:</p>
                    <label for="icon_before_image" class="custom-file-upload-btn">
                        UPLOAD BEFORE IMAGE
                    </label>
                    <p><input id="icon_before_image" type="file" accept='image/*' size="27"/></p>

                    <label for="icon_after_image" class="custom-file-upload-btn">
                        UPLOAD AFTER IMAGE
                    </label>
                    <p><input id="icon_after_image" type="file" accept='image/*' size="27"/></p>

                    By clicking SUBMIT you certify that all information provided herein is accurate and is to the best of your knowledge and you Agree that you understand, agree with and are subject to the Official Rules.
              </section>
          </div>
        </form>
    </div> -->

    <?php
}

add_action('wp_enqueue_scripts', 'b_a_enqueue_scripts');
function b_a_enqueue_scripts()
{
    wp_enqueue_style('bac_style', plugin_dir_url(__FILE__) . 'assets/css/before_after.css', '', "1.1", "all");
    wp_enqueue_style('jquery_steps_style', plugin_dir_url(__FILE__) . 'assets/css/jquery.steps-1.1.0/jquery.steps.css');
    wp_enqueue_script('jquery_steps_script', plugin_dir_url(__FILE__) . 'assets/js/jquery.steps-1.1.0/jquery.steps.js', array(), '1.1', true);
    wp_enqueue_script('bac_script', plugin_dir_url(__FILE__) . 'assets/js/before_after.js', array(), '1.1', true);
}
