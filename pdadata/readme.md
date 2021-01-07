# What's This All About?
The frca-pdadta.json file is the core "Problem Determination" database behind the **Fishikawa - Root Cause Analysis** application. This file is designed to be a freely available, GNU/GPL licensed, application agnostic json dataset of of known problems that may adversly effect the successful installation, management and operation of the Joomla! CMS.

> The FRCA and associated datasets come with ABSOLUTELY NO WARRANTY. 

>Fishikawa (FRCA) & associated files or datasets are are not affiliated with or endorsed by The Joomla! Project™. Use of the Joomla!® name, symbol, logo, and related trademarks is licensed by Open Source Matters, Inc.

---

## Problem Determination Aide - frca-pdadata.json
a json encoded file providing a consistent (hex based) alpha-numeric convention for reporting/ listing/ registering/ displaying errors and messages in the **Fishikawa - Root Cause Analysis application** for joomla! known problems and potential fixes.

___

### FRCA Data & Problem Determination Codes
**data :** describes the associated application and attributes 

**pdc :** provides a unique referancable problem-code element, describing a specific well-known problem, its potential symptoms, causes, effects on Joomla! operation and actions for possible fixes 

**_Usage :_** as a problem determination test is added to the FRCA, a matching (next logical sequence) problem-code and information entry needs to be added to the frca-pdadata.json file so individual errors and messages can be directly referenced (and potentially re-used) instead of always looping through what might become a very large json database of issues and fixes in the future.

**_Purpose :_** the creation of uniquely referenceable and *semi~ self-describing* records for individual problems, errors or messages similar to the Apache "Status & Response Code" methodology (https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)

although a little convoluted within the FRCA application, this simple element structure allows the frca-pdadata.json file to also be used in any web-based application remotely for other _(non-FRCA)_ purposes.

#### FRCA Usage - getPDA() function

|    **FRCA**    |      **COMMON**      |           |
|     :----:     |        :----:        |     ----: |
| _impact-group_ |    _problem-code_    |           |
|      (0-F)     | (0-F)(0-F)(0-F)(0-F) | _example_ |
|        1       |   0    0    1    5   | _10015_   |
|        2       |   0    0    A    C   | _200AC_   |
|        3       |   0    0    1    5   | _30015_   |
|        4       |   0    0    A    C   | _400AC_   |

#### Definitions
**(impact-group) :** single character, 0-F alpha-numeric - provides up to 16 top-level groups describing the "impact" on Joomla!
manually adding this to the "getPDA" function *(and not hardcoded in json file)* allows any problem-code to be moved between impact-groups by simply changing the first variable of the function only and does not clutter or restrain the json record if not being used withiin FRCA.

_FRCA Example:_ **getPDA( '_1_', '0051' );** would set the impact-group to "1" (Critical) and get the problem-code of "0051" from the json file (or imported Array), if at a later date problem-code "0012" is no-longer considered to be "Critical" we can easily update the getPDA function to getPDA('**2**', '0051) re-classifying the problem as an impact-group of "Moderate" (2).

**0**: **Unclassified** - Generic/Unknown errors or messages

**1**: **Critical** - Fatal/Danger errors or messages

**2**: **Moderate** - Serious/Warning errors or messages

**3**: **Minor** - Notice/Information errors or messages

**4**: **Best Practice** - Recommendation errors or messages

**5**: _(unused, future expansion)_

**6**: _(unused, future expansion)_

**7**: _(unused, future expansion)_

**8**: _(unused, future expansion)_

**9**: _(unused, future expansion)_

**A**: _(unused, future expansion)_

**B**: _(unused, future expansion)_

**C**: _(unused, future expansion)_

**D**: _(unused, future expansion)_

**E**: _(unused, future expansion)_

**F**: **Fishikawa** - internal errors or messages


**(problem-code) :** 4x single character, (0-F)(0-F)(0-F)(0-F) - provides ~65k possible problem-codes to describe problems

_(w)_ single character, 0-F alpha-numeric

_(x)_ single character, 0-F alpha-numeric

_(y)_ single character, 0-F alpha-numeric

_(z)_ single character, 0-F alpha-numeric

**_Usage:_** starting in reverse order : 0001, 0002, 0003 ... 01A9 etc

**_Reserved problem-codes:_**

**0000** : reserved as a default for Unknown/Unclassified/Invalid entries in the FRCA $problemList

**0001-0050** : reserved for Fishikawa internal errors posted to entries in the FRCA $problemList

***Special problem-codes:***

**V**_abc_ : used for VEL feed equivalent to the FRCA problem-code, "_abc_" references the VEL json feed/entry "id" _(**note:** the VEL feed **does not** use the getPDA function, VEL record elements are "mapped" within FRCA to the existing $problemList array formatted elements, as described below)_

> if, at a later date, it is determined that more granular or strict "categorisation" is required, specific numbers or letters (or hex bit-mapping) could be "reserved" or "assigned" to the left-most problem-code (W) element for certain types or groups of errors in a similar manner to the impact-groups

---

## Problem Determination Aide - FRCA discovered problem array structure

\$problemList\[ **(impact-group)** \]\[ **(problem-code)** \]

> $problemList\['_CRITICAL_ | _MODERATE_ | _MINOR_ | _BESTPRACTICE_'\]\[ _\$problemcode_ \] = array(

>    heading	=> short problem heading/title or the issue,

>    description => more detailed description of the problem/issue _(p,b,strong,i,u allowed)_,

>    category => _problem-category, refer below_,

>    severity => _1_ | _2_ | _3_ | _4_,

>    symptoms => array(
        0 => brief description of likely symptom _(upto 4 & p,b,strong,i,u allowed)_,
        1 => brief description of likely symptom,
        2 => brief description of likely symptom,
        3 => brief description of likely symptom
    ),

>    causes => array(
        0 => brief description of likely cause _(upto 4 & p,b,strong,i,u allowed)_,
        1 => brief description of likely cause,
        2 => brief description of likely cause,
        3 => brief description of likely cause
    ),

>    effects => array(
        0 => brief description of likely effected resource _(upto 4 & p,b,strong,i,u allowed)_,
        1 => brief description of likely effected resource,
        2 => brief description of likely effected resource,
        3 => brief description of likely effected resource
    ),

>    actions => array(
        0 => description of suggested resolution/fix action _(upto 4 & p,b,strong,i,u allowed)_,
        1 => description of suggested resolution/fix action,
        2 => description of suggested resolution/fix action,
        3 => description of suggested resolution/fix action,
    ),

>    experience => _Expert_ | _Intermediate_ | _Beginner_,

>    problemcode => _\$problemcode_ | _V\$id_

> );

---

**(severity) :** valid severity values _(VEL: "Risk")_

1 : showstopper & fatal problems (VEL: high)

2 : warnings & potential problems (VEL: medium)

3 : minor problems limiting or reducing functionality (VEL: low/small)

4 : Optional/Good Practice (VEL: No Value, display "?")

**(problem-category) :** valid problem-category values

Unknown, Fishikawa, Server, Web Server, Network, Browser, Database, PHP, Javascript, jQuery, Ajax, Joomla, Joomla Administration, Joomla Site, Library, Component, Module, Plugin, Template, Remote Service, Optimisation, Security, Performance, Coding Practice, Known Bug (+automated; VEL/Vulnerable Extension List)

**(experience) :** valid values to describe the skill level required to resolve this problem

Expert : Expert knoweldge/experience or professional skillset required

Intermediate : Intermediate or experienced user skillset needed

Beginner : Beginner or casual user skillset will suffice

**_Notes_**
> discovered problem UI display - (causes) & (effects) may both be left empty without error, reducing the problem information display panels/cards from 3 to 2

> VEL entry UI display - do not map to (causes) or (effects), defaulting to only 2 information panels/cards
