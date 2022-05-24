<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificate
 * @package App\Models
 *
 * @property int $id
 * @property int $certificateNumber
 * @property string $certificateName
 * @property string $username
 * @property Carbon $certificateFinish
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['certificateNumber', 'certificateName', 'username','certificateFinish'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
