<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
}
