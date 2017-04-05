@extends('adminlte::page')

@section('htmlheader_title')
	Step wizard demo
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

                <h4>Matrícula</h4>

                    <form-user></form-user>


                    <wizard>
                        <wizard-step title="Usuari" active="true">
                            Step 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, tempore voluptatum. At blanditiis deleniti doloribus ducimus eaque ex excepturi facere ipsum laborum maxime neque odit, officia quod, tenetur, ullam voluptatem.
                        </wizard-step>
                        <wizard-step title="Dades personals">
                            Step 2 . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ipsam modi perferendis provident quis ratione veritatis vero voluptatem! Aut, excepturi facilis. Autem eum minus numquam optio porro veniam, voluptate voluptatum.
                        </wizard-step>
                        <wizard-step title="Estudi i curs">
                            Step 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, beatae distinctio explicabo fugiat id iure maxime officia quis rem reprehenderit similique sit tempore unde ut voluptas? Aliquid consequuntur minima suscipit.
                        </wizard-step>
                        <wizard-step title="Mòduls professionals">
                            Step 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum, ea exercitationem incidunt iste libero molestiae odit, perspiciatis quam quis recusandae repellendus unde. Ab commodi esse et maiores, quam quo.
                        </wizard-step>
                        <wizard-step title="Unitats formatives">
                            Step 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cupiditate labore minima nesciunt quasi rem! A ab architecto, deserunt eligendi, error inventore magnam necessitatibus nemo praesentium quis sit totam voluptate.
                        </wizard-step>
                    </wizard>


			</div>
		</div>
	</div>
@endsection
