<?php
/**
 * Copyright (C) MIKO LLC
 * Licensed under the GNU General Public License v3.0 or later;
 * see the LICENSE file in the root of this repository.
 * Written by Nikolay Beketov, 10 2019
 *
 */

namespace Modules\ModuleBackup\App\Forms;

use Phalcon\Forms\Element\File;
use Phalcon\Forms\Form;


class ModuleBackupRestoreForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        $this->add(new File('restore-file'));
    }
}