<?php
namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
       return TeamResource::collection(Team::latest()->get());
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return TeamResource
     */
    public function show($id)
    {
        return new TeamResource(Team::where('id','=',$id)->first());
    }


}
