@extends('adminlte::page')

@section('htmlheader_title')
	Step wizard demo
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

                <h4>Matrícula</h4>

                    {{--<wizard-enrollment></wizard-enrollment>--}}

                    <wizard>
                        <wizard-step title="Usuari" active="true">
                            <enrollment-form-user :submit-button="false"></enrollment-form-user>
                        </wizard-step>
                        <wizard-step title="Dades personals">
                            <enrollment-form-person :submit-button="false"></enrollment-form-person>
                        </wizard-step>
                        <wizard-step title="Estudi i curs">
                            <enrollment-form-test></enrollment-form-test>
                        </wizard-step>
                        <wizard-step title="Mòduls professionals">
                            <enrollment-form-test></enrollment-form-test>
                        </wizard-step>
                        <wizard-step title="Unitats formatives">
                            <enrollment-form-test></enrollment-form-test>
                        </wizard-step>
                    </wizard>


			</div>
		</div>
	</div>
@endsection
