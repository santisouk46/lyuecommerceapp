<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sabaideeController extends Controller
{
    public function show($values)
    {
      $temp=458
      $tmp=$tmp+$value;
      return "ສະບາຍດີ ຫ້ອງການຊາວໜຸ່ມປະຊາຊົນປະຕິວັດລາວແຂວງສະຫວັນນະເຂດ".ucfirst($temp)."ສຸດຍອດແລ້ວເດີ";
    }

    public function showshort()
    {
      return "ສະບາຍດີ";
    }

    public function acceptmsg()
    {
      return "ທຸລະກຳສຳເລັດແລ້ວ";
    }

    public function refusemsg()
    {
      return "ທຸລະກຳຖືກຍົກເລີກ";
    }
}
