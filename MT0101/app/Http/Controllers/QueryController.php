<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class QueryController extends Controller
{
    public function home(){
        
        // 1º

            $cities = DB::table('cities')->orderBy('name','ASC')->get();
            // var_dump($cities);


        //end 1º


        // 2º
            $cities = DB::table('cities')->orderBy('name','DESC')->get();
            // var_dump($cities);
        //end 2º

        // 3º
            $countries = DB::table('countries')
                        ->orderBy('name_en')
                        ->orderBy('name','ASC')
                        ->get();

            // var_dump($countries);    
        //end 3º



        // 4º

            $cities = DB::table('cities')->where('name','like','San %')->get();
            // var_dump($cities);   
        //end 4º

        // 5º
            $countries = DB::table('countries')->select('id')->where('name','Guatemala')->first();
            
            // echo $countries->id;

        //end 5º


        // 6º
            $countries = DB::table('states')->select('name')->where('country_id',$countries->id)->get();
            // var_dump($countries);
        //end 6º

        // 7º
            $students = DB::table('students')->select('email','primer_nombre','primer_apellido')
                            ->where('teléfono','like', '6%')->get();
            // var_dump($students);
            
        //end 7º

        // 8º
            $students = DB::table('students')->where('carrera','like', 'Ingeniería %')->count();
            // echo $students;
        //end 8º

        // 9º
            $students = DB::table('students')
                        ->select('primer_nombre','segundo_nombre','primer_apellido',
                        'segundo_apellido','nota_paes')
                        ->where('carrera','Ingeniería en Sistemas')
                        ->whereBetween('ano_ingreso',[2000,2010])
                        ->orderBy('nota_paes','asc')
                        ->get();

            // var_dump($students);
        //end 9º

        // 10º
            $notaPaes = DB::table('students')->avg('nota_paes');
            // echo $notaPaes;
        //end 10º

        // 11º
            $notaAdmision = DB::table('students')->avg('nota_admision');
            // echo $notaAdmision;
            
        //end 11º

        // 12º
            $students = DB::table('students')
                            ->select('*',DB::raw('((nota_paes + nota_admision)/2) as promedio_paes_admision'))
                            ->orderBy('promedio_paes_admision','desc')
                            ->get();
            // var_dump($students);
        //end 12º


        // 13º
            $students = DB::table('students')->select('primer_nombre',
                                  'primer_apellido','teléfono','nota_paes')
                            ->orderBy('nota_paes', 'desc')
                            ->limit(20)
                            ->get();
            // var_dump($students);
        //end 13º

        // 14º
            $promedio = DB::table('students')
                            ->select('carrera',DB::raw('avg(nota_admision) as promedio_admision'))
                            ->groupBy('carrera')
                            ->get();
            // var_dump($promedio);
        //end 14º


        // 15º
            $registros = DB::table('students')->select('ano_ingreso',
                         DB::raw('count(*) AS total_registros'))
                         ->groupBy('ano_ingreso')
                         ->get();

            // var_dump($registros);
        //end 15º

        // 16º
            $reprobados = DB::table('students')
                              ->select('*')
                              ->where('nota_paes','<','6.0')
                              ->get();
            // var_dump($reprobados);
        //end 16º

        // 17º
            $reprobados = DB::table('students')
                              ->select('*')
                              ->where('nota_paes','<','6.0')
                              ->where('nota_admision','<','6.0')
                              ->get();
            // var_dump($reprobados);

        //end 17º


        // 18º
            $notasBajas = DB::table('students')
                              ->select('carrera',DB::raw('MIN(nota_admision) AS nota_minima'))
                              ->groupBy('carrera')
                              ->orderBy('nota_minima','asc')
                              ->get();
            // var_dump($notasBajas);
        //end 18º

        // 19º
            $notasBajas = DB::table('students')
                              ->select('carrera',DB::raw('MAX(nota_admision) AS nota_maxima'))
                              ->groupBy('carrera')
                              ->having('nota_maxima','>' ,'7.0')
                              ->orderBy('nota_maxima','desc')
                              ->get();
            // var_dump($notasBajas);
        //end 19º

        // 20º
            $students = DB::table('students')
                            ->where('primer_apellido','like','a%')
                            ->where('email','like','%gmail%')
                            ->where('ano_ingreso','<','2010')
                            ->where(DB::raw('nota_paes + nota_admision'),'>=' , '11')
                            ->orderBy('primer_apellido')
                            ->orderBy('segundo_apellido')
                            ->get();
                            
            // var_dump($students);
        //end 20º

        // 21º
            $paises = DB::table('countries')->select('id')
                      ->whereIn('name',['Nicaragua','Belice','Panamá','Guatemala'
                                          ,'El Salvador','Honduras','Costa Rica'])
                      ->get();


            $id[] =[];
            $lon=0;
            foreach ($paises as $values):
                $id[$lon] = $values->id;
                $lon++;
            endforeach;

            // var_dump($paises);
        //end 21º

        // 22º
            $states = DB::table('states')->select('country_id', DB::raw('count(*) AS total_estados'))
                                         ->whereIn('country_id',$id)
                                         ->groupBy('country_id')
                                         ->get();
            // var_dump($states);
        //end 22º

        // 23º
            $paises = DB::table('states')->select('id')
                                         ->where('country_id', '90')
                                         ->get();


            $id2[] =[];
            $lon2=0;
            foreach ($paises as $values):
                $id2[$lon2] = $values->id;
                $lon2++;
            endforeach;

            // var_dump($paises);
        //end 23º

        // 24º
            $cities = DB::table('cities')->select('state_id', DB::raw('count(*) AS total_municipios'))
                                         ->whereIn('state_id',$id2)
                                         ->groupBy('state_id')
                                         ->get();

            // var_dump($cities);
        //end 24º


        // 25º
        $cities = DB::table('cities')->whereIn('state_id',$id2)
                                     ->orderBy('state_id')
                                     ->get();


        // var_dump($cities);
        //end 25º
        

    } 





}
