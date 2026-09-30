# Backup module for Dzvin PBX

[![GitHub release](https://img.shields.io/github/v/release/dzvinpbx/dzvinpbx-module-backup)](https://github.com/dzvinpbx/dzvinpbx-module-backup/releases)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

**[Українською](README.uk.md)** | **English**

Backup and restore module for Dzvin PBX: settings, call history (CDR), call recordings and sound
files. Backups can be stored on the local disk, or on FTP, SFTP or WebDAV.

> This is a Dzvin PBX fork of the MikoPBX **ModuleBackup** module — see [Attribution](#attribution).

## Features

- **Manual backup** with selectable content: PBX settings, call history, call recordings, sound files
- **Scheduled backups** with a limit on the number of kept versions
- **Remote storage** — FTP, SFTP, WebDAV
- **Restore** from a ZIP or IMG backup, or from a legacy Askozia PBX (XML) settings export
- **Web interface** — backup list, download, delete, progress
- **REST API** — `/pbxcore/api/modules/ModuleBackup/` (`list`, `start`, `stop`, `download`, `recover`, ...)

## Requirements

- Dzvin PBX 2024.1.114 or higher

## Installation

1. Open **Modules** → **Marketplace** in the Dzvin PBX admin panel
2. Find **Backup**
3. Click **Install**

Or from a GitHub release: download the `.zip`, then **Modules** → **Install module**.

## Usage

- **Backup** — choose what to archive and start a backup.
- **Backup schedule** — enable scheduled backups, set the time, the number of versions and an optional remote storage.
- **Restore** — upload a backup file and choose what to restore. Restoring settings is irreversible
  and reboots the PBX automatically.

## License

GPL-3.0-or-later — see [LICENSE](LICENSE).

## Attribution

This is a Dzvin PBX fork of [`mikopbx/ModuleBackup`](https://github.com/mikopbx/ModuleBackup)
(forked from tag `v1.101`, commit `85be429`), © 2017-2024 Alexey Portnov and Nikolay Beketov,
licensed GPL-3.0-or-later. The fork renames the PBX core namespace (`MikoPBX\` → `DzvinPBX\`),
drops carrying a license key over from legacy configurations, fills in the missing Ukrainian UI
strings, and adjusts links and the release process for this repository. The original copyright and
license headers are kept unchanged in every source file; see [MikoPBX Core](https://github.com/mikopbx/Core)
for the upstream PBX this module was built for.
