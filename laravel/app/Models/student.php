// app/Student.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
