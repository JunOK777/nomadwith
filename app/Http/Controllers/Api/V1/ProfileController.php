<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;



use App\Repositories\ProfileRepositoryInterface;

class ProfileController extends Controller
{

    /** @var ProfileRepositoryInterface */
    protected $profileRepository;

    public function __construct(
        profileRepositoryInterface $profileRepository
    ) {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
      $profiles = $this->profileRepository->getAllProfile();
      dd($profiles);

      return response()->json(['profiles' => $profiles]);
    }

    public function show(Profile $profile)
    {
      return response()->json(['profile' => $profile]);
    }

    public function update(Profile $profile, ProfileRequest $request)
    {

      // $profile->fill($request->all())->update();
      $profile->fill($request->all())->save();
      $profile->load('user');

      return response()->json(['profile' => $profile]);
    }
}
