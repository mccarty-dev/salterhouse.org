
@extends('layouts.master')

@section('title', 'Visit Us')



@section('content')
    <div class="visit">
        <h4>The museum is open by appointment only.</h4>
        <h4>Please call to schedule your visit. (620) 435-6564.</h4>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1381.2431476194934!2d-97.76870770813672!3d37.2648760935242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bab323695003d1%3A0x11e7e246238f574c!2s220%20W%20Garfield%20St%2C%20Argonia%2C%20KS%2067004!5e0!3m2!1sen!2sus!4v1590362343083!5m2!1sen!2sus"
                width="75%" height="450"  allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>

        <div class="admission-table">
            <h4>Admission</h4>
            <table>
                <tr>
                    <td>
                        Age 13+
                    </td>
                    <td>
                        $5
                    </td>
                </tr>
                <tr>
                    <td>
                        Ages 7-12
                    </td>
                    <td>
                        $3
                    </td>
                </tr>
                <tr>
                    <td>
                        6 and under
                    </td>
                    <td>
                        Free
                    </td>
                </tr>
            </table>
        </div>
        <h4>NOTE: the museum does not accept credit or debit cards.</h4>
    </div>

@stop



