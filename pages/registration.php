<?php
/**
 * Registration Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Registration - FMLDS';

include_header();
?>

<section class="section">
    <div class="container">
        <div class="fees-table" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <h2 style="text-align: center; margin-bottom: 2rem;">Registration Fees</h2>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Registration Types</th>
                            <th>Early Birds (Close: 15 October 2026)</th>
                            <th>Birds On Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="4">Author/Paper registration**</th>
                            <td>Non-IEEE Members</td>
                            <td>JPY &yen;77,500</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td>IEEE Members</td>
                            <td>JPY &yen;70,000</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td>Student Non-IEEE Members</td>
                            <td>JPY &yen;65,000</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td>IEEE Student Members</td>
                            <td>JPY &yen;55,000</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <th rowspan="4">Non-Author/Attendance only registration</th>
                            <td>Non-IEEE Members</td>
                            <td>JPY &yen;65,000</td>
                            <td>JPY &yen;75,000</td>
                        </tr>
                        <tr>
                            <td>IEEE Members</td>
                            <td>JPY &yen;55,000</td>
                            <td>JPY &yen;65,000</td>
                        </tr>
                        <tr>
                            <td>Student Non-IEEE Members</td>
                            <td>JPY &yen;50,000</td>
                            <td>JPY &yen;55,000</td>
                        </tr>
                        <tr>
                            <td>IEEE Student Members</td>
                            <td>JPY &yen;40,000</td>
                            <td>JPY &yen;45,000</td>
                        </tr>
                        <tr>
                            <th>Virtual Presentation</th>
                            <td>All types above</td>
                            <td>JPY &yen;30,000</td>
                            <td>JPY &yen;35,000</td>
                        </tr>
                        <tr>
                            <td>Additional Paper Each (In addition to the primary registration)</td>
                            <td>All types above</td>
                            <td>JPY &yen;30,000</td>
                            <td>--</td>
                        </tr>
                        <tr>
                            <td>Conference Dinner</td>
                            <td>All types above</td>
                            <td>JPY &yen;15,000</td>
                            <td>JPY &yen;15,000</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center; padding: 1rem;">
                                <a href="https://fmlds.org/registration-author-information.php?confid=fmlds&venue=wsu&registrationType=EBD" class="btn" target="_blank">Register</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="max-width: 1200px; margin: 0 auto 3rem auto;" class="card">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Registration Fees Include</h2>
                <p style="line-height: 1.8;">
                    Registration fees include conference kits, publication cost, and admission to all sessions. An additional dinner ticket can be purchased and paid online at JPY &yen;15,000 per person.
                </p>

                <ol style="padding-left: 2rem; line-height: 2; margin-bottom: 0;">
                    <li>To use the IEEE registration rate, the registrant needs to provide his/her IEEE membership number in the registration form.</li>
                    <li>To use the student registration rate, the student needs to provide his/her supervisor's contact information in the registration form.</li>
                </ol>
            </div>
        </div>

        <div style="max-width: 1200px; margin: 0 auto 3rem auto;" class="card">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Cancellation and Refund Policy</h2>

                <p style="line-height: 1.8; margin-bottom: 1rem;">
                    All cancellation/refund requests must be provided in writing with the registration invoice and emailed to <a href="mailto:info@fmlds.org" style="color: var(--primary-color);">info@fmlds.org</a> by 01 October 2026. An administrative fee of JPY &yen;15,000 will be charged for each refund.
                </p>

                <p style="line-height: 1.8;">
                    All requests for registration transfers must be provided in writing and emailed to <a href="mailto:info@fmlds.org" style="color: var(--primary-color);">info@fmlds.org</a> by 15 October 2026. The registration rate difference will apply depending on the category of the new registration. All transfer requests received after 15 October 2026 will be charged an additional admin fee of JPY &yen;15,000.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_footer(); ?>
