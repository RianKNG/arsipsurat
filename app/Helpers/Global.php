<?php
use App\Models\SuratModel;

function totalpenutupan()
{
     return SuratModel::count();

}