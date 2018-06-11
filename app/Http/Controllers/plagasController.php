<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class plagasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plagas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
          $n_patas = $request->n_patas;
          $antenas = $request->antenas;
          $caparazon = $request->caparazon;
          $alas = $request->alas;
          $exoesqueleto = $request->exoesqueleto;
          $forma = $request->forma;
          $tamano = $request->tamano;
          $color = $request->color;

          // $plaga = "'hacia_delante([".$n_patas.",".$antenas.",".$caparazon.",".$alas.",".$exoesqueleto.",".$forma.",".$tamano.",".$color."]).'";
          // $comando = `swipl -s Agente_desicion.pl -g $plaga -t halt.`;

          $process = new Process("swipl -s Agente_desicion.pl -g 'hacia_delante([patas_0,antenas_si,caparazon_si,alas_si,exoesqueleto_si,forma_redonda,tamano_menos_1_cm,color_verde]).' -t halt.");
          // $process = new Process("dir");
          $process->run();
          if (!$process->isSuccessful()) {
    throw new ProcessFailedException($process);
}
          echo $process->getOutput();
          // echo $plaga;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
