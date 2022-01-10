<?php

namespace App\Http\Controllers;

use App\Models\Topicality;
use App\Http\Resources\Topicality as ResourcesTopicality;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $topicalities = Topicality::orderByDesc('created_at')->get();

        // return $topicalities->toJson(JSON_PRETTY_PRINT);

        return ResourcesTopicality::collection(Topicality::orderByDesc('created_at')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Topicality::create($request->all())){
            return response()->json([
                'success' => 'Actualite creee avec succes'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        return new ResourcesTopicality($topicality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if($topicality->update($request->all())){
            return response()->json([
                'success' => 'Actualite modifie avec succes'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        if($topicality->delete()){
            return response()->json([
                'success' => 'Actualite supprime avec succes'
            ], 200);
        }
    }
}
