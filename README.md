[![TYPO3 11](https://img.shields.io/badge/TYPO3-11-orange.svg)](https://get.typo3.org/version/11)
[![TYPO3 10](https://img.shields.io/badge/TYPO3-10-orange.svg)](https://get.typo3.org/version/10)

# TYPO3 extension `jn_phpcontentelement`

This extension allows you to add PHP scripts via content elements.

|                  | URL                                                               |
|------------------|-------------------------------------------------------------------|
| **Repository:**  | https://github.com/joppnet/jn_phpcontentelement                   |
| **Read online:** | https://docs.typo3.org/p/joppnet/jn_phpcontentelement/main/en-us/ |
| **TER:**         | https://extensions.typo3.org/extension/jn_phpcontentelement       |

## Installation & Configuration

1. Install the extension "jn_phpcontentelement" in your TYPO3 Extension Manager or via Composer.
2. Include the static TypoScript template "[joppnet] PHP Content Element" in the root page.
     
## Usage

1. In List view, add a new "PHP Content" record.
<img src="https://www.joppnet.de/typo3conf/ext/jn_phpcontentelement/Resources/Public/Manual/manual-record.png" />
2. In Page view, add a new "[joppnet] PHP Content Element" plugin content element.
<img src="https://www.joppnet.de/typo3conf/ext/jn_phpcontentelement/Resources/Public/Manual/manual-ce.png" />
3. Select the page where you created the records from the previous step in the "Record Storage Page" select field.
<img src="https://www.joppnet.de/typo3conf/ext/jn_phpcontentelement/Resources/Public/Manual/manual-record-storage.png" />
