@extends('plantilla')

@section('title', 'Inicio')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('estilos/plantilla.css')}}">
    <table>
        <tr>
            <td>
                <div>
                    <div class="container py-5">
                        <div class="centrado">
                            <div class="recuadro">
                                <section>
                                    <h2>VISIÓN</h2>
                                    <p class="text-center">
                                        Facilitar una gestión eficiente, innovadora y sustentable de los espacios de estacionamiento en la universidad, mediante una aplicación tecnológica que optimice el uso de recursos, promueva la movilidad sostenible y contribuya al bienestar de la comunidad universitaria. La aplicación busca ser una herramienta que refleje el enfoque integral y humanista de la institución, alineándose con su compromiso de innovación y desarrollo sustentable del entorno.
                                    </p>
                                </section>
                            </div>
                    </div>
                </div>
            </td>
            <td>
                <div>
                    <div class="container py-5">
                        <div class="centrado">
                            <div class="recuadro">
                                <section>
                                    <h2>VISIÓN</h2>
                                    <p class="text-center">
                                        Ser reconocida como una solución tecnológica de vanguardia que contribuya a la excelencia operativa de la universidad, promoviendo un entorno inclusivo y equitativo para toda la comunidad universitaria. La aplicación aspira a ser un referente en la implementación de sistemas inteligentes que fomenten la responsabilidad social, la innovación y la sostenibilidad, alineándose con la visión de la universidad de ser una institución líder en formación profesional y desarrollo humano.
                                    </p>
                                </section>
                            </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
@endsection
