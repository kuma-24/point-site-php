<?php
namespace App\Services\Users;

use App\Models\User;
use App\Models\UserEnrollmentManagement;
use Illuminate\Support\Facades\Auth;

class EnrollmentManagement {
  
  public function __construct(UserEnrollmentManagement $enrollmentModel)
  {
    $this->enrollment_model = $enrollmentModel;
  }

  public function create($user)
  {
    $this->enrollment_model::create([
      'user_id' => $user->id,
      'name' => $user->name,
      'email' => $user->email,
      'status' => 'enrollment',
    ]);
  }

  public function update($user_id)
  {
    $this->enrollment_model::where('user_id', '=', $user_id)->update([
      'status' => 'withdrawal',
    ]);
  }
}