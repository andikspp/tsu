<?php

namespace App\Http\Controllers;

use App\Http\Requests\TukFormRequest;
use App\Models\Tuk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TukController extends Controller
{
    public function index()
    {
        return view('pages.tuk.index');
    }

    public function form()
    {
        $competences = DB::table('competence')->select('id', 'name')->get();
        $competenceList = [];

        foreach ($competences as $competence) {
            $competenceList[$competence->id] = $competence->name;
        }

        return view('pages.tuk.form', ['competence' => $competenceList]);
    }

    public function store(TukFormRequest $request)
    {
        // Validate the request
        $validatedData = $request->validated();

        $userId = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
            $validatedData['photo'] = $photoPath;
        }

        if ($request->hasFile('identification_card')) {
            $idCardPath = $request->file('identification_card')->store('id_cards');
            $validatedData['identification_card'] = $idCardPath;
        }

        if ($request->hasFile('education_certificate')) {
            $educationCertificatePath = $request->file('education_certificate')->store('education_certificates');
            $validatedData['education_certificate'] = $educationCertificatePath;
        }

        if ($request->hasFile('curriculum_vitae')) {
            $cvPath = $request->file('curriculum_vitae')->store('curriculum_vitaes');
            $validatedData['curriculum_vitae'] = $cvPath;
        }

        $validatedData['user_id'] = $userId;

        $tukForm = Tuk::create($validatedData);

        return response()->json([
            'message' => 'Tuk form created successfully',
            'data' => $tukForm,
        ]);
    }

    public function getImage($folder, $filename)
    {

        $path = storage_path('app/' . $folder . '/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $file = file_get_contents($path);
        $type = mime_content_type($path);

        return response($file, 200)->header('Content-Type', $type);
    }
}
