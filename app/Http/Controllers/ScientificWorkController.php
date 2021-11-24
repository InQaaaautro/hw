<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Requests\StoreScientificWorksFormRequest;
use App\Models\ScientificWork;
use App\Models\User;
use App\Services\ScientificWorks\ScientificWorksService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;
use View;

class ScientificWorkController extends Controller
{
    private $scientificWorksService;

    public function __construct(
        ScientificWorksService $scientificWorksService
    )
    {
        $this->scientificWorksService = $scientificWorksService;
    }

    private function getScientificWorkService(): ScientificWorksService
    {
        return app(ScientificWorksService::class);
    }

    public function index(Request $request)
    {

        if (auth()->user()->hasRole("employee")) {
            $ScientificWorkItems = $this->getScientificWorkService()->getUserScientificWorks(Auth::id());
        }

        if (auth()->user()->hasRole("admin")) {
            $ScientificWorkItems = $this->getScientificWorkService()->getAllScientificWorks();
        }

        View::share([
            "scientific_work" => $ScientificWorkItems,
            "user" => User::pluck("username", "id")
        ]);

        return view('parts.scientific_work');
    }

    public function create()
    {

        return view('parts.scientific_works.create', [
            'user' => User::pluck("username", "id")
        ]);
    }

    public function store(StoreScientificWorksFormRequest $request)
    {
        $data = $request->getFormData();
        $data['user_id'] = Auth::id();
        $createdSW = $this->getScientificWorkService()->createScientificWorks($data);
        /* $route = route("scientific_works.edit",["scientific_work" => $createdSW["id"]]);
         Log::channel("slack")->info(__('info.successfulСreateScientificWork') . $route);*/
        return redirect()->route('scientific_works.index', ["locale" => App::getLocale()]);
    }

    public function show(ScientificWork $scientificWork)
    {
        return $this->edit($scientificWork);
    }

    public function edit(ScientificWork $scientificWork)
    {

        if (Auth::id() === $scientificWork->user_id) {
            return view('parts.scientific_works.edit',
                [
                    "user" => User::pluck("username", "id"),
                    "scientific_work" => $scientificWork
                ]
            );
        } else {
            abort(403);
        }
    }

    public function update(StoreScientificWorksFormRequest $request, ScientificWork $scientificWork)
    {

        $this->getScientificWorkService()->updateScientificWorks($scientificWork, $request->getFormData());
        return redirect()->route('scientific_works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ScientificWork $scientificWork
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(ScientificWork $scientificWork)
    {

    }*/
}
