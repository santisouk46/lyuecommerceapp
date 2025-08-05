<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sabaideeController extends Controller
{
    public function show()
    {
      return "ສະບາຍດີ ຫ້ອງການຊາວໜຸ່ມປະຊາຊົນປະຕິວັດລາວແຂວງສະຫວັນນະເຂດ";
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
