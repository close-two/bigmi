< script > 
(function() {
    function c(e, c) {
        for (var d = 0,
        m = e.length; d < m; d++) if (e[d] === c) return ! 0;
        return ! 1
    }
    function d(e, c) {
        var d;
        if (e) for (var m, A = c ? 1 : 0; m = D[A++];) if (d = B[m]) for (var M, P = 0; (M = d[P]) && !0 !== e(m, M); P++);
    }
    function q(e) {
        var c;
        d(function(d, m) {
            if ((e + "").toUpperCase() === m.B) return c = c || m,
            !0
        });
        return c
    }
    function r(e) {
        var c;
        d(function(d, m) {
            e = (e + "").replace(/^0+/, "").replace(/^\+/, "");
            var A = (m.N + "").replace(/^0+/, "").replace(/^\+/, "");
            e === A && (c = m)
        });
        return c
    }
    function t(e) {
        var c;
        d(function(d, m) {
            if ((e + "").toLowerCase() === m.C.toLowerCase()) return c = m,
            !0
        });
        return c
    }
    function v(e) {
        return q(e) || r(e) || t(e)
    }
    var D = "usual A B C D E F G H I J K L M N O P Q R S T U V W X Y Z".split(" "),
    B = {
        usual: [{
            C: "\u4e2d\u56fd",
            N: "+86",
            B: "CN"
        },
        {
            C: "\u4e2d\u56fd\u53f0\u6e7e",
            N: "+886",
            B: "TW"
        },
        {
            C: "\u4e2d\u56fd\u9999\u6e2f",
            N: "+852",
            B: "HK"
        },
        {
            C: "Brazil",
            N: "+55",
            B: "BR"
        },
        {
            C: "India",
            N: "+91",
            B: "IN"
        },
        {
            C: "Indonesia",
            N: "+62",
            B: "ID"
        },
        {
            C: "Malaysia",
            N: "+60",
            B: "MY"
        }],
        A: [{
            B: "AD",
            C: "Andorra",
            N: "+376"
        },
        {
            B: "AF",
            C: "Afghanistan",
            N: "+93"
        },
        {
            B: "AG",
            C: "Antigua and Barbuda",
            N: "+1"
        },
        {
            B: "AI",
            C: "Anguilla",
            N: "+1"
        },
        {
            B: "AL",
            C: "Albania",
            N: "+355"
        },
        {
            B: "AM",
            C: "Armenia",
            N: "+374"
        },
        {
            B: "AO",
            C: "Angola",
            N: "+244"
        },
        {
            B: "AR",
            C: "Argentina",
            N: "+54"
        },
        {
            B: "AS",
            C: "American Samoa",
            N: "+1"
        },
        {
            B: "AT",
            C: "Austria",
            N: "+43"
        },
        {
            B: "AU",
            C: "Australia",
            N: "+61"
        },
        {
            B: "AW",
            C: "Aruba",
            N: "+297"
        },
        {
            B: "AZ",
            C: "Azerbaijan",
            N: "+994"
        },
        {
            B: "DZ",
            C: "Algeria",
            N: "+213"
        }],
        B: [{
            B: "BA",
            C: "Bosnia and Herzegovina",
            N: "+387"
        },
        {
            B: "BB",
            C: "Barbados",
            N: "+1"
        },
        {
            B: "BD",
            C: "Bangladesh",
            N: "+880"
        },
        {
            B: "BE",
            C: "Belgium",
            N: "+32"
        },
        {
            B: "BF",
            C: "Burkina Faso",
            N: "+226"
        },
        {
            B: "BG",
            C: "Bulgaria",
            N: "+359"
        },
        {
            B: "BH",
            C: "Bahrain",
            N: "+973"
        },
        {
            B: "BI",
            C: "Burundi",
            N: "+257"
        },
        {
            B: "BJ",
            C: "Benin",
            N: "+229"
        },
        {
            B: "BM",
            C: "Bermuda",
            N: "+1"
        },
        {
            B: "BN",
            C: "Brunei",
            N: "+673"
        },
        {
            B: "BO",
            C: "Bolivia",
            N: "+591"
        },
        {
            B: "BQ",
            C: "Bonaire, Sint Eustatius and Saba",
            N: "+599"
        },
        {
            B: "BR",
            C: "Brazil",
            N: "+55"
        },
        {
            B: "BS",
            C: "Bahamas",
            N: "+1"
        },
        {
            B: "BT",
            C: "Bhutan",
            N: "+975"
        },
        {
            B: "BW",
            C: "Botswana",
            N: "+267"
        },
        {
            B: "BY",
            C: "Belarus",
            N: "+375"
        },
        {
            B: "BZ",
            C: "Belize",
            N: "+501"
        },
        {
            B: "IO",
            C: "British Indian Ocean Territory",
            N: "+246"
        },
        {
            B: "VG",
            C: "British Virgin Islands",
            N: "+1"
        }],
        C: [{
            B: "CA",
            C: "Canada",
            N: "+1"
        },
        {
            B: "CC",
            C: "Cocos Islands",
            N: "+61"
        },
        {
            B: "CF",
            C: "Central African Republic",
            N: "+236"
        },
        {
            B: "CG",
            C: "Congo",
            N: "+242"
        },
        {
            B: "CI",
            C: "C\u00f4te d'Ivoire",
            N: "+225"
        },
        {
            B: "CK",
            C: "Cook Islands",
            N: "+682"
        },
        {
            B: "CL",
            C: "Chile",
            N: "+56"
        },
        {
            B: "CM",
            C: "Cameroon",
            N: "+237"
        },
        {
            B: "CN",
            C: "China",
            N: "+86"
        },
        {
            B: "CO",
            C: "Colombia",
            N: "+57"
        },
        {
            B: "CR",
            C: "Costa Rica",
            N: "+506"
        },
        {
            B: "CU",
            C: "Cuba",
            N: "+53"
        },
        {
            B: "CV",
            C: "Cape Verde",
            N: "+238"
        },
        {
            B: "CW",
            C: "Cura\u00e7ao",
            N: "+599"
        },
        {
            B: "CX",
            C: "Christmas Island",
            N: "+61"
        },
        {
            B: "CY",
            C: "Cyprus",
            N: "+357"
        },
        {
            B: "CZ",
            C: "Czech Republic",
            N: "+420"
        },
        {
            B: "HR",
            C: "Croatia",
            N: "+385"
        },
        {
            B: "KH",
            C: "Cambodia",
            N: "+855"
        },
        {
            B: "KM",
            C: "Comoros",
            N: "+269"
        },
        {
            B: "KY",
            C: "Cayman Islands",
            N: "+1"
        },
        {
            B: "TD",
            C: "Chad",
            N: "+235"
        }],
        D: [{
            B: "DJ",
            C: "Djibouti",
            N: "+253"
        },
        {
            B: "DK",
            C: "Denmark",
            N: "+45"
        },
        {
            B: "DM",
            C: "Dominica",
            N: "+1"
        },
        {
            B: "DO",
            C: "Dominican Republic",
            N: "+1"
        }],
        E: [{
            B: "EC",
            C: "Ecuador",
            N: "+593"
        },
        {
            B: "EE",
            C: "Estonia",
            N: "+372"
        },
        {
            B: "EG",
            C: "Egypt",
            N: "+20"
        },
        {
            B: "ER",
            C: "Eritrea",
            N: "+291"
        },
        {
            B: "ET",
            C: "Ethiopia",
            N: "+251"
        },
        {
            B: "GQ",
            C: "Equatorial Guinea",
            N: "+240"
        },
        {
            B: "SV",
            C: "El Salvador",
            N: "+503"
        }],
        F: [{
            B: "FI",
            C: "Finland",
            N: "+358"
        },
        {
            B: "FJ",
            C: "Fiji",
            N: "+679"
        },
        {
            B: "FK",
            C: "Falkland Islands",
            N: "+5+"
        },
        {
            B: "FO",
            C: "Faroe Islands",
            N: "+298"
        },
        {
            B: "FR",
            C: "France",
            N: "+33"
        },
        {
            B: "GF",
            C: "French Guiana",
            N: "+594"
        },
        {
            B: "PF",
            C: "French Polynesia",
            N: "+689"
        }],
        G: [{
            B: "DE",
            C: "Germany",
            N: "+49"
        },
        {
            B: "GA",
            C: "Gabon",
            N: "+241"
        },
        {
            B: "GD",
            C: "Grenada",
            N: "+1"
        },
        {
            B: "GE",
            C: "Georgia",
            N: "+995"
        },
        {
            B: "GG",
            C: "Guernsey",
            N: "+44"
        },
        {
            B: "GH",
            C: "Ghana",
            N: "+233"
        },
        {
            B: "GI",
            C: "Gibraltar",
            N: "+350"
        },
        {
            B: "GL",
            C: "Greenland",
            N: "+299"
        },
        {
            B: "GM",
            C: "Gambia",
            N: "+220"
        },
        {
            B: "GN",
            C: "Guinea",
            N: "+224"
        },
        {
            B: "GP",
            C: "Guadeloupe",
            N: "+590"
        },
        {
            B: "GR",
            C: "Greece",
            N: "+30"
        },
        {
            B: "GT",
            C: "Guatemala",
            N: "+502"
        },
        {
            B: "GU",
            C: "Guam",
            N: "+1"
        },
        {
            B: "GW",
            C: "Guinea-Bissau",
            N: "+245"
        },
        {
            B: "GY",
            C: "Guyana",
            N: "+592"
        }],
        H: [{
            B: "HK",
            C: "Hong Kong",
            N: "+852"
        },
        {
            B: "HN",
            C: "Honduras",
            N: "+504"
        },
        {
            B: "HT",
            C: "Haiti",
            N: "+509"
        },
        {
            B: "HU",
            C: "Hungary",
            N: "+36"
        }],
        I: [{
            B: "ID",
            C: "Indonesia",
            N: "+62"
        },
        {
            B: "IE",
            C: "Ireland",
            N: "+353"
        },
        {
            B: "IL",
            C: "Israel",
            N: "+972"
        },
        {
            B: "IM",
            C: "Isle Of Man",
            N: "+44"
        },
        {
            B: "IN",
            C: "India",
            N: "+91"
        },
        {
            B: "IQ",
            C: "Iraq",
            N: "+964"
        },
        {
            B: "IR",
            C: "Iran",
            N: "+98"
        },
        {
            B: "IS",
            C: "Iceland",
            N: "+354"
        },
        {
            B: "IT",
            C: "Italy",
            N: "+39"
        }],
        J: [{
            B: "JE",
            C: "Jersey",
            N: "+44"
        },
        {
            B: "JM",
            C: "Jamaica",
            N: "+1"
        },
        {
            B: "JO",
            C: "Jordan",
            N: "+962"
        },
        {
            B: "JP",
            C: "Japan",
            N: "+81"
        }],
        K: [{
            B: "KE",
            C: "Kenya",
            N: "+254"
        },
        {
            B: "KG",
            C: "Kyrgyzstan",
            N: "+996"
        },
        {
            B: "KI",
            C: "Kiribati",
            N: "+686"
        },
        {
            B: "KW",
            C: "Kuwait",
            N: "+965"
        },
        {
            B: "KZ",
            C: "Kazakhstan",
            N: "+7"
        }],
        L: [{
            B: "LA",
            C: "Laos",
            N: "+856"
        },
        {
            B: "LB",
            C: "Lebanon",
            N: "+961"
        },
        {
            B: "LI",
            C: "Liechtenstein",
            N: "+423"
        },
        {
            B: "LR",
            C: "Liberia",
            N: "+231"
        },
        {
            B: "LS",
            C: "Lesotho",
            N: "+266"
        },
        {
            B: "LT",
            C: "Lithuania",
            N: "+370"
        },
        {
            B: "LU",
            C: "Luxembourg",
            N: "+352"
        },
        {
            B: "LV",
            C: "Latvia",
            N: "+371"
        },
        {
            B: "LY",
            C: "Libya",
            N: "+218"
        }],
        M: [{
            B: "FM",
            C: "Micronesia",
            N: "+691"
        },
        {
            B: "MA",
            C: "Morocco",
            N: "+212"
        },
        {
            B: "MC",
            C: "Monaco",
            N: "+377"
        },
        {
            B: "MD",
            C: "Moldova",
            N: "+373"
        },
        {
            B: "ME",
            C: "Montenegro",
            N: "+382"
        },
        {
            B: "MG",
            C: "Madagascar",
            N: "+261"
        },
        {
            B: "MH",
            C: "Marshall Islands",
            N: "+692"
        },
        {
            B: "MK",
            C: "Macedonia",
            N: "+389"
        },
        {
            B: "ML",
            C: "Mali",
            N: "+223"
        },
        {
            B: "MM",
            C: "Myanmar",
            N: "+95"
        },
        {
            B: "MN",
            C: "Mongolia",
            N: "+976"
        },
        {
            B: "MO",
            C: "Macao",
            N: "+853"
        },
        {
            B: "MQ",
            C: "Martinique",
            N: "+596"
        },
        {
            B: "MR",
            C: "Mauritania",
            N: "+222"
        },
        {
            B: "MS",
            C: "Montserrat",
            N: "+1"
        },
        {
            B: "MT",
            C: "Malta",
            N: "+356"
        },
        {
            B: "MU",
            C: "Mauritius",
            N: "+230"
        },
        {
            B: "MV",
            C: "Maldives",
            N: "+960"
        },
        {
            B: "MW",
            C: "Malawi",
            N: "+265"
        },
        {
            B: "MX",
            C: "Mexico",
            N: "+52"
        },
        {
            B: "MY",
            C: "Malaysia",
            N: "+60"
        },
        {
            B: "MZ",
            C: "Mozambique",
            N: "+258"
        },
        {
            B: "YT",
            C: "Mayotte",
            N: "+262"
        }],
        N: [{
            B: "KP",
            C: "North Korea",
            N: "+850"
        },
        {
            B: "MP",
            C: "Northern Mariana Islands",
            N: "+1"
        },
        {
            B: "NA",
            C: "Namibia",
            N: "+264"
        },
        {
            B: "NC",
            C: "New Caledonia",
            N: "+687"
        },
        {
            B: "NE",
            C: "Niger",
            N: "+227"
        },
        {
            B: "NF",
            C: "Norfolk Island",
            N: "+672"
        },
        {
            B: "NG",
            C: "Nigeria",
            N: "+234"
        },
        {
            B: "NI",
            C: "Nicaragua",
            N: "+505"
        },
        {
            B: "NL",
            C: "Netherlands",
            N: "+31"
        },
        {
            B: "NO",
            C: "Norway",
            N: "+47"
        },
        {
            B: "NP",
            C: "Nepal",
            N: "+977"
        },
        {
            B: "NR",
            C: "Nauru",
            N: "+674"
        },
        {
            B: "NU",
            C: "Niue",
            N: "+683"
        },
        {
            B: "NZ",
            C: "New Zealand",
            N: "+64"
        }],
        O: [{
            B: "OM",
            C: "Oman",
            N: "+968"
        }],
        P: [{
            B: "PA",
            C: "Panama",
            N: "+507"
        },
        {
            B: "PE",
            C: "Peru",
            N: "+51"
        },
        {
            B: "PG",
            C: "Papua New Guinea",
            N: "+675"
        },
        {
            B: "PH",
            C: "Philippines",
            N: "+63"
        },
        {
            B: "PK",
            C: "Pakistan",
            N: "+92"
        },
        {
            B: "PL",
            C: "Poland",
            N: "+48"
        },
        {
            B: "PR",
            C: "Puerto Rico",
            N: "+1"
        },
        {
            B: "PS",
            C: "Palestine",
            N: "+970"
        },
        {
            B: "PT",
            C: "Portugal",
            N: "+351"
        },
        {
            B: "PW",
            C: "Palau",
            N: "+680"
        },
        {
            B: "PY",
            C: "Paraguay",
            N: "+595"
        }],
        Q: [{
            B: "QA",
            C: "Qatar",
            N: "+974"
        }],
        R: [{
            B: "RE",
            C: "Reunion",
            N: "+262"
        },
        {
            B: "RO",
            C: "Romania",
            N: "+40"
        },
        {
            B: "RU",
            C: "Russia",
            N: "+7"
        },
        {
            B: "RW",
            C: "Rwanda",
            N: "+250"
        }],
        S: [{
            B: "BL",
            C: "Saint Barth\u00e9lemy",
            N: "+590"
        },
        {
            B: "CH",
            C: "Switzerland",
            N: "+41"
        },
        {
            B: "ES",
            C: "Spain",
            N: "+34"
        },
        {
            B: "KN",
            C: "Saint Kitts And Nevis",
            N: "+1"
        },
        {
            B: "KR",
            C: "South Korea",
            N: "+82"
        },
        {
            B: "LC",
            C: "Saint Lucia",
            N: "+1"
        },
        {
            B: "LK",
            C: "Sri Lanka",
            N: "+94"
        },
        {
            B: "MF",
            C: "Saint Martin",
            N: "+590"
        },
        {
            B: "PM",
            C: "Saint Pierre And Miquelon",
            N: "+508"
        },
        {
            B: "RS",
            C: "Serbia",
            N: "+381"
        },
        {
            B: "SA",
            C: "Saudi Arabia",
            N: "+966"
        },
        {
            B: "SB",
            C: "Solomon Islands",
            N: "+677"
        },
        {
            B: "SC",
            C: "Seychelles",
            N: "+248"
        },
        {
            B: "SD",
            C: "Sudan",
            N: "+249"
        },
        {
            B: "SE",
            C: "Sweden",
            N: "+46"
        },
        {
            B: "SG",
            C: "Singapore",
            N: "+65"
        },
        {
            B: "SH",
            C: "Saint Helena",
            N: "+290"
        },
        {
            B: "SI",
            C: "Slovenia",
            N: "+386"
        },
        {
            B: "SJ",
            C: "Svalbard And Jan Mayen",
            N: "+47"
        },
        {
            B: "SK",
            C: "Slovakia",
            N: "+421"
        },
        {
            B: "SL",
            C: "Sierra Leone",
            N: "+232"
        },
        {
            B: "SM",
            C: "San Marino",
            N: "+378"
        },
        {
            B: "SN",
            C: "Senegal",
            N: "+221"
        },
        {
            B: "SO",
            C: "Somalia",
            N: "+252"
        },
        {
            B: "SR",
            C: "Suriname",
            N: "+597"
        },
        {
            B: "ST",
            C: "Sao Tome And Principe",
            N: "+239"
        },
        {
            B: "SX",
            C: "Sint Maarten (Dutch part)",
            N: "+1"
        },
        {
            B: "SY",
            C: "Syria",
            N: "+963"
        },
        {
            B: "SZ",
            C: "Swaziland",
            N: "+268"
        },
        {
            B: "VC",
            C: "Saint Vincent And The Grenadines",
            N: "+1"
        },
        {
            B: "WS",
            C: "Samoa",
            N: "+685"
        },
        {
            B: "ZA",
            C: "South Africa",
            N: "+27"
        }],
        T: [{
            B: "CD",
            C: "The Democratic Republic Of Congo",
            N: "+243"
        },
        {
            B: "TC",
            C: "Turks And Caicos Islands",
            N: "+1"
        },
        {
            B: "TG",
            C: "Togo",
            N: "+228"
        },
        {
            B: "TH",
            C: "Thailand",
            N: "+66"
        },
        {
            B: "TJ",
            C: "Tajikistan",
            N: "+992"
        },
        {
            B: "TK",
            C: "Tokelau",
            N: "+690"
        },
        {
            B: "TL",
            C: "Timor-Leste",
            N: "+670"
        },
        {
            B: "TM",
            C: "Turkmenistan",
            N: "+993"
        },
        {
            B: "TN",
            C: "Tunisia",
            N: "+216"
        },
        {
            B: "TO",
            C: "Tonga",
            N: "+676"
        },
        {
            B: "TR",
            C: "Turkey",
            N: "+90"
        },
        {
            B: "TT",
            C: "Trinidad and Tobago",
            N: "+1"
        },
        {
            B: "TV",
            C: "Tuvalu",
            N: "+688"
        },
        {
            B: "TW",
            C: "Taiwan",
            N: "+886"
        },
        {
            B: "TZ",
            C: "Tanzania",
            N: "+255"
        }],
        U: [{
            B: "AE",
            C: "United Arab Emirates",
            N: "+971"
        },
        {
            B: "GB",
            C: "United Kingdom",
            N: "+44"
        },
        {
            B: "UA",
            C: "Ukraine",
            N: "+380"
        },
        {
            B: "UG",
            C: "Uganda",
            N: "+256"
        },
        {
            B: "US",
            C: "United States",
            N: "+1"
        },
        {
            B: "UY",
            C: "Uruguay",
            N: "+598"
        },
        {
            B: "UZ",
            C: "Uzbekistan",
            N: "+998"
        },
        {
            B: "VI",
            C: "U.S. Virgin Islands",
            N: "+1"
        }],
        V: [{
            B: "VA",
            C: "Vatican",
            N: "+379"
        },
        {
            B: "VE",
            C: "Venezuela",
            N: "+58"
        },
        {
            B: "VN",
            C: "Vietnam",
            N: "+84"
        },
        {
            B: "VU",
            C: "Vanuatu",
            N: "+678"
        }],
        W: [{
            B: "EH",
            C: "Western Sahara",
            N: "+212"
        },
        {
            B: "WF",
            C: "Wallis And Futuna",
            N: "+681"
        }],
        Y: [{
            B: "YE",
            C: "Yemen",
            N: "+967"
        }],
        Z: [{
            B: "ZM",
            C: "Zambia",
            N: "+260"
        },
        {
            B: "ZW",
            C: "Zimbabwe",
            N: "+263"
        }]
    };
    if (JSP_VAR) {
        var I = JSP_VAR.locale;
        JSP_VAR.dataCenterZone && "China" !== JSP_VAR.dataCenterZone && "zh_CN" !== I && (B.usual["1"].C = "\u53f0\u7063");
        0 === I.indexOf("zh") && (I = "zh_CN" === I ? "zh_CN": "zh_TW");
        c(["zh_CN", "zh_TW", "en"], I) || (B.usual = [{
            C: "Brazil",
            N: "+55",
            B: "BR"
        },
        {
            C: "India",
            N: "+91",
            B: "IN"
        },
        {
            C: "Indonesia",
            N: "+62",
            B: "ID"
        },
        {
            C: "Malaysia",
            N: "+60",
            B: "MY"
        }])
    }
    window.RegionsCode = {
        getAll: function(e, c, d) {
            for (var m = ["<div class='country-code'>"], A, M, P, ta = 0; M = D[ta++];) if (A = B[M], P = "", e && M in e && (P = e[M]), A) {
                m.push("<div class='container countrycode-container-" + M + "'><div class='header'>" + (P || M) + "</div>");
                m.push("<ul class='list'>");
                for (var f = 0; P = A[f++];) M = c ? (P.N + "").replace(/^0+/,
                function() {
                    return "+"
                }) : "",
                m.push("<li class='record clearfix'><span class='record-country' data-code='" + M + "' data-brief='" + P.B + "'>" + P.C + "</span><span class='record-code'>" + M + "</span></li>");
                m.push("</ul></div>")
            }
            e = cancelStr = "";
            cancelStr = JSP_VAR && JSP_VAR.cancel ? JSP_VAR.cancel: "Cancel";
            d ? e = "": e = '<div class="cancel_panel"><div class="cancel_box"><a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">' + cancelStr + "</a></div></div>";
            m.push("</div>");
            m.push(e);
            m.push('<div class="navbar_panel"><div class="navbar"><a to="usual">#</a>');
            for (d = 0; 26 > d; d++) e = String.fromCharCode(65 + d),
            m.push('<a to="' + e + '">' + e + "</a>");
            m.push("</div></div>");
            return m.join("")
        },
        getData: function() {
            return {
                list: D,
                data: B
            }
        },
        getByBrief: q,
        getByCode: r,
        getByCountry: t,
        search: v,
        searchLike: function(e) {
            var c = [];
            if (e = (e + "").replace(/^\+/, "")) {
                var L = v(e);
                L && c.push(L);
                d(function(d, A) { - 1 !== A.C.toLowerCase().indexOf(e) ? c.push(A) : -1 !== (A.N + "").indexOf(e) && c.push(A)
                })
            }
            return c
        },
        searchLikeData: function(e) {
            var c = [];
            if (e = (e + "").replace(/^\+/, "")) {
                var L = v(e);
                L && c.push(L);
                d(function(d, A) {
                    RegExp("^" + e, "i").test(A.C.toLowerCase()) ? c.push(A) : RegExp("^" + e).test(A.N.replace(/^\+/, "")) && c.push(A)
                })
            }
            return c
        },
        addUsual: function(c) {
            var d;
            if (d = c.B) if (d = c.C) if (d = c.N) {
                a: {
                    d = 0;
                    for (var L; L = B.usual[d++];) if (L.N === c.N || c.B === L.B) {
                        d = !0;
                        break a
                    }
                    d = !1
                }
                d = !d
            }
            d && B.usual && B.usual.unshift(c)
        }
    }
})();
var Base64 = function() {
    _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    _utf8_encode = function(c) {
        c = c.replace(/\r\n/g, "\n");
        for (var d = "",
        q = 0; q < c.length; q++) {
            var r = c.charCodeAt(q);
            128 > r ? d += String.fromCharCode(r) : (127 < r && 2048 > r ? d += String.fromCharCode(r >> 6 | 192) : (d += String.fromCharCode(r >> 12 | 224), d += String.fromCharCode(r >> 6 & 63 | 128)), d += String.fromCharCode(r & 63 | 128))
        }
        return d
    };
    _utf8_decode = function(c) {
        for (var d = "",
        q = 0,
        r = c1 = c2 = 0; q < c.length;) r = c.charCodeAt(q),
        128 > r ? (d += String.fromCharCode(r), q++) : 191 < r && 224 > r ? (c2 = c.charCodeAt(q + 1), d += String.fromCharCode((r & 31) << 6 | c2 & 63), q += 2) : (c2 = c.charCodeAt(q + 1), c3 = c.charCodeAt(q + 2), d += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63), q += 3);
        return d
    };
    return {
        encode: function(c) {
            var d = "",
            q, r, t, v, D, B, I = 0;
            for (c = _utf8_encode(c); I < c.length;) q = c.charCodeAt(I++),
            r = c.charCodeAt(I++),
            t = c.charCodeAt(I++),
            v = q >> 2,
            q = (q & 3) << 4 | r >> 4,
            D = (r & 15) << 2 | t >> 6,
            B = t & 63,
            isNaN(r) ? D = B = 64 : isNaN(t) && (B = 64),
            d = d + _keyStr.charAt(v) + _keyStr.charAt(q) + _keyStr.charAt(D) + _keyStr.charAt(B);
            return d
        },
        decode: function(c) {
            var d = "",
            q, r, t, v, D, B = 0;
            for (c = c.replace(/[^A-Za-z0-9\+\/\=]/g, ""); B < c.length;) q = _keyStr.indexOf(c.charAt(B++)),
            r = _keyStr.indexOf(c.charAt(B++)),
            v = _keyStr.indexOf(c.charAt(B++)),
            D = _keyStr.indexOf(c.charAt(B++)),
            q = q << 2 | r >> 4,
            r = (r & 15) << 4 | v >> 2,
            t = (v & 3) << 6 | D,
            d += String.fromCharCode(q),
            64 != v && (d += String.fromCharCode(r)),
            64 != D && (d += String.fromCharCode(t));
            return d = _utf8_decode(d)
        }
    }
} (),
CryptoJS = CryptoJS ||
function(c, d) {
    var q = {},
    r = q.lib = {},
    t = function() {},
    v = r.Base = {
        extend: function(A) {
            t.prototype = this;
            var c = new t;
            A && c.mixIn(A);
            c.hasOwnProperty("init") || (c.init = function() {
                c.$super.init.apply(this, arguments)
            });
            c.init.prototype = c;
            c.$super = this;
            return c
        },
        create: function() {
            var c = this.extend();
            c.init.apply(c, arguments);
            return c
        },
        init: function() {},
        mixIn: function(c) {
            for (var d in c) c.hasOwnProperty(d) && (this[d] = c[d]);
            c.hasOwnProperty("toString") && (this.toString = c.toString)
        },
        clone: function() {
            return this.init.prototype.extend(this)
        }
    },
    D = r.WordArray = v.extend({
        init: function(c, e) {
            c = this.words = c || [];
            this.sigBytes = e != d ? e: 4 * c.length
        },
        toString: function(c) {
            return (c || I).stringify(this)
        },
        concat: function(c) {
            var d = this.words,
            e = c.words,
            m = this.sigBytes;
            c = c.sigBytes;
            this.clamp();
            if (m % 4) for (var f = 0; f < c; f++) d[m + f >>> 2] |= (e[f >>> 2] >>> 24 - f % 4 * 8 & 255) << 24 - (m + f) % 4 * 8;
            else if (65535 < e.length) for (f = 0; f < c; f += 4) d[m + f >>> 2] = e[f >>> 2];
            else d.push.apply(d, e);
            this.sigBytes += c;
            return this
        },
        clamp: function() {
            var d = this.words,
            e = this.sigBytes;
            d[e >>> 2] &= 4294967295 << 32 - e % 4 * 8;
            d.length = c.ceil(e / 4)
        },
        clone: function() {
            var c = v.clone.call(this);
            c.words = this.words.slice(0);
            return c
        },
        random: function(d) {
            for (var e = [], m = 0; m < d; m += 4) e.push(4294967296 * c.random() | 0);
            return new D.init(e, d)
        }
    }),
    B = q.enc = {},
    I = B.Hex = {
        stringify: function(c) {
            var d = c.words;
            c = c.sigBytes;
            for (var e = [], m = 0; m < c; m++) {
                var f = d[m >>> 2] >>> 24 - m % 4 * 8 & 255;
                e.push((f >>> 4).toString(16));
                e.push((f & 15).toString(16))
            }
            return e.join("")
        },
        parse: function(c) {
            for (var d = c.length,
            e = [], m = 0; m < d; m += 2) e[m >>> 3] |= parseInt(c.substr(m, 2), 16) << 24 - m % 8 * 4;
            return new D.init(e, d / 2)
        }
    },
    e = B.Latin1 = {
        stringify: function(c) {
            var d = c.words;
            c = c.sigBytes;
            for (var e = [], m = 0; m < c; m++) e.push(String.fromCharCode(d[m >>> 2] >>> 24 - m % 4 * 8 & 255));
            return e.join("")
        },
        parse: function(c) {
            for (var d = c.length,
            e = [], m = 0; m < d; m++) e[m >>> 2] |= (c.charCodeAt(m) & 255) << 24 - m % 4 * 8;
            return new D.init(e, d)
        }
    },
    z = B.Utf8 = {
        stringify: function(c) {
            try {
                return decodeURIComponent(escape(e.stringify(c)))
            } catch(d) {
                throw Error("Malformed UTF-8 data");
            }
        },
        parse: function(c) {
            return e.parse(unescape(encodeURIComponent(c)))
        }
    },
    L = r.BufferedBlockAlgorithm = v.extend({
        reset: function() {
            this._data = new D.init;
            this._nDataBytes = 0
        },
        _append: function(c) {
            "string" == typeof c && (c = z.parse(c));
            this._data.concat(c);
            this._nDataBytes += c.sigBytes
        },
        _process: function(d) {
            var e = this._data,
            m = e.words,
            L = e.sigBytes,
            f = this.blockSize,
            r = L / (4 * f),
            r = d ? c.ceil(r) : c.max((r | 0) - this._minBufferSize, 0);
            d = r * f;
            L = c.min(4 * d, L);
            if (d) {
                for (var q = 0; q < d; q += f) this._doProcessBlock(m, q);
                q = m.splice(0, d);
                e.sigBytes -= L
            }
            return new D.init(q, L)
        },
        clone: function() {
            var c = v.clone.call(this);
            c._data = this._data.clone();
            return c
        },
        _minBufferSize: 0
    });
    r.Hasher = L.extend({
        cfg: v.extend(),
        init: function(c) {
            this.cfg = this.cfg.extend(c);
            this.reset()
        },
        reset: function() {
            L.reset.call(this);
            this._doReset()
        },
        update: function(c) {
            this._append(c);
            this._process();
            return this
        },
        finalize: function(c) {
            c && this._append(c);
            return this._doFinalize()
        },
        blockSize: 16,
        _createHelper: function(c) {
            return function(d, e) {
                return (new c.init(e)).finalize(d)
            }
        },
        _createHmacHelper: function(c) {
            return function(d, e) {
                return (new m.HMAC.init(c, e)).finalize(d)
            }
        }
    });
    var m = q.algo = {};
    return q
} (Math); (function(c) {
    function d(c, d, e, q, r, t, f) {
        c = c + (d & e | ~d & q) + r + f;
        return (c << t | c >>> 32 - t) + d
    }
    function q(c, d, e, q, r, t, f) {
        c = c + (d & q | e & ~q) + r + f;
        return (c << t | c >>> 32 - t) + d
    }
    function r(c, d, e, q, r, t, f) {
        c = c + (d ^ e ^ q) + r + f;
        return (c << t | c >>> 32 - t) + d
    }
    function t(c, d, e, q, r, t, f) {
        c = c + (e ^ (d | ~q)) + r + f;
        return (c << t | c >>> 32 - t) + d
    }
    for (var v = CryptoJS,
    D = v.lib,
    B = D.WordArray,
    I = D.Hasher,
    D = v.algo,
    e = [], z = 0; 64 > z; z++) e[z] = 4294967296 * c.abs(c.sin(z + 1)) | 0;
    D = D.MD5 = I.extend({
        _doReset: function() {
            this._hash = new B.init([1732584193, 4023233417, 2562383102, 271733878])
        },
        _doProcessBlock: function(c, m) {
            for (var A = 0; 16 > A; A++) {
                var v = m + A,
                z = c[v];
                c[v] = (z << 8 | z >>> 24) & 16711935 | (z << 24 | z >>> 8) & 4278255360
            }
            var A = this._hash.words,
            v = c[m + 0],
            z = c[m + 1],
            B = c[m + 2],
            f = c[m + 3],
            D = c[m + 4],
            I = c[m + 5],
            C = c[m + 6],
            w = c[m + 7],
            x = c[m + 8],
            J = c[m + 9],
            H = c[m + 10],
            W = c[m + 11],
            Y = c[m + 12],
            y = c[m + 13],
            U = c[m + 14],
            Z = c[m + 15],
            k = A[0],
            n = A[1],
            p = A[2],
            l = A[3],
            k = d(k, n, p, l, v, 7, e[0]),
            l = d(l, k, n, p, z, 12, e[1]),
            p = d(p, l, k, n, B, 17, e[2]),
            n = d(n, p, l, k, f, 22, e[3]),
            k = d(k, n, p, l, D, 7, e[4]),
            l = d(l, k, n, p, I, 12, e[5]),
            p = d(p, l, k, n, C, 17, e[6]),
            n = d(n, p, l, k, w, 22, e[7]),
            k = d(k, n, p, l, x, 7, e[8]),
            l = d(l, k, n, p, J, 12, e[9]),
            p = d(p, l, k, n, H, 17, e[10]),
            n = d(n, p, l, k, W, 22, e[11]),
            k = d(k, n, p, l, Y, 7, e[12]),
            l = d(l, k, n, p, y, 12, e[13]),
            p = d(p, l, k, n, U, 17, e[14]),
            n = d(n, p, l, k, Z, 22, e[15]),
            k = q(k, n, p, l, z, 5, e[16]),
            l = q(l, k, n, p, C, 9, e[17]),
            p = q(p, l, k, n, W, 14, e[18]),
            n = q(n, p, l, k, v, 20, e[19]),
            k = q(k, n, p, l, I, 5, e[20]),
            l = q(l, k, n, p, H, 9, e[21]),
            p = q(p, l, k, n, Z, 14, e[22]),
            n = q(n, p, l, k, D, 20, e[23]),
            k = q(k, n, p, l, J, 5, e[24]),
            l = q(l, k, n, p, U, 9, e[25]),
            p = q(p, l, k, n, f, 14, e[26]),
            n = q(n, p, l, k, x, 20, e[27]),
            k = q(k, n, p, l, y, 5, e[28]),
            l = q(l, k, n, p, B, 9, e[29]),
            p = q(p, l, k, n, w, 14, e[30]),
            n = q(n, p, l, k, Y, 20, e[31]),
            k = r(k, n, p, l, I, 4, e[32]),
            l = r(l, k, n, p, x, 11, e[33]),
            p = r(p, l, k, n, W, 16, e[34]),
            n = r(n, p, l, k, U, 23, e[35]),
            k = r(k, n, p, l, z, 4, e[36]),
            l = r(l, k, n, p, D, 11, e[37]),
            p = r(p, l, k, n, w, 16, e[38]),
            n = r(n, p, l, k, H, 23, e[39]),
            k = r(k, n, p, l, y, 4, e[40]),
            l = r(l, k, n, p, v, 11, e[41]),
            p = r(p, l, k, n, f, 16, e[42]),
            n = r(n, p, l, k, C, 23, e[43]),
            k = r(k, n, p, l, J, 4, e[44]),
            l = r(l, k, n, p, Y, 11, e[45]),
            p = r(p, l, k, n, Z, 16, e[46]),
            n = r(n, p, l, k, B, 23, e[47]),
            k = t(k, n, p, l, v, 6, e[48]),
            l = t(l, k, n, p, w, 10, e[49]),
            p = t(p, l, k, n, U, 15, e[50]),
            n = t(n, p, l, k, I, 21, e[51]),
            k = t(k, n, p, l, Y, 6, e[52]),
            l = t(l, k, n, p, f, 10, e[53]),
            p = t(p, l, k, n, H, 15, e[54]),
            n = t(n, p, l, k, z, 21, e[55]),
            k = t(k, n, p, l, x, 6, e[56]),
            l = t(l, k, n, p, Z, 10, e[57]),
            p = t(p, l, k, n, C, 15, e[58]),
            n = t(n, p, l, k, y, 21, e[59]),
            k = t(k, n, p, l, D, 6, e[60]),
            l = t(l, k, n, p, W, 10, e[61]),
            p = t(p, l, k, n, B, 15, e[62]),
            n = t(n, p, l, k, J, 21, e[63]);
            A[0] = A[0] + k | 0;
            A[1] = A[1] + n | 0;
            A[2] = A[2] + p | 0;
            A[3] = A[3] + l | 0
        },
        _doFinalize: function() {
            var d = this._data,
            e = d.words,
            q = 8 * this._nDataBytes,
            r = 8 * d.sigBytes;
            e[r >>> 5] |= 128 << 24 - r % 32;
            var t = c.floor(q / 4294967296);
            e[(r + 64 >>> 9 << 4) + 15] = (t << 8 | t >>> 24) & 16711935 | (t << 24 | t >>> 8) & 4278255360;
            e[(r + 64 >>> 9 << 4) + 14] = (q << 8 | q >>> 24) & 16711935 | (q << 24 | q >>> 8) & 4278255360;
            d.sigBytes = 4 * (e.length + 1);
            this._process();
            d = this._hash;
            e = d.words;
            for (q = 0; 4 > q; q++) r = e[q],
            e[q] = (r << 8 | r >>> 24) & 16711935 | (r << 24 | r >>> 8) & 4278255360;
            return d
        },
        clone: function() {
            var c = I.clone.call(this);
            c._hash = this._hash.clone();
            return c
        }
    });
    v.MD5 = I._createHelper(D);
    v.HmacMD5 = I._createHmacHelper(D)
})(Math); (function(c, d, q) {
    function r(a) {
        return a.getFullYear() + "-" + (a.getMonth() + 1) + "-" + a.getDate() + " " + a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds() + ":" + a.getMilliseconds()
    }
    function t(a, g) {
        if (Array.prototype.forEach) Array.prototype.forEach.call(a, g);
        else for (var F = 0,
        b = a.length; F < b; F++) g.call(a, a[F], F)
    }
    function v(a) {
        return (a + "").replace(/^\s+/, "").replace(/\s+$/, "")
    }
    function D(a) {
        return (a + "").replace(/\</g, "&lt").replace(/\>/g, "&gt")
    }
    function B(a, g, F, b, c, e) {
        var f = new Date;
        f.setDate(f.getDate() + F);
        d.cookie = a + "=" + escape(g) + ";expires=" + f.toGMTString() + ";path=" + b + ";domain=" + c + (null == e ? "": ";max-age=" + e)
    }
    function I(a, g, F) {
        B(a, "", new Date(0), g, F)
    }
    function e(a) {
        for (var g = d.cookie.split(";"), F = "", b = 0; b < g.length; b++) if (v(g[b]).substr(0, a.length) == a) {
            F = v(g[b]).substr(a.length + 1);
            break
        }
        return unescape(F)
    }
    function z(a) {
        var g = "",
        F = !1;
        if (0 === location.search.length) return g;
        if (0 == location.search.indexOf("?") && 1 < location.search.indexOf("=")) for (arrSource = location.search.substring(1, location.search.length).split("&"), R = 0; R < arrSource.length && !F;) 0 < arrSource[R].indexOf("=") && arrSource[R].split("=")[0].toLowerCase() == a.toLowerCase() && (g = arrSource[R].split("=")[1], F = !0),
        R++;
        return g
    }
    function L(a, g) {
        if (a === g) return ! 0;
        if (a.constructor !== g.constructor || !(a instanceof Object && g instanceof Object)) return ! 1;
        for (var F in a) if (a.hasOwnProperty(F) && (!g.hasOwnProperty(F) || a[F] !== g[F])) return ! 1;
        for (F in g) if (g.hasOwnProperty(F) && !a.hasOwnProperty(F)) return ! 1;
        return ! 0
    }
    function m(a, g, F) {
        if (!g) return a;
        F = F || /\{([\w-]+)\}/g;
        a = A(a);
        return a.replace(F,
        function(a, b) {
            if (g[b] !== q) {
                var d;
                d = g[b] instanceof Function ? g[b].call(g) : A(g[b]);
                return F.test(d) ? m(d, g, F) : d
            }
            return c.__debug__ ? b: ""
        })
    }
    function A(a) {
        var g = {
            "{quot}": "'",
            "{apos}": '"'
        },
        b;
        for (b in g) g.hasOwnProperty(b) && (a = (a + "").replace(RegExp(b, "g"), g[b]));
        return a
    }
    function M(a, g) {
        u.add("objectExtend", g);
        for (var b in g) a[b] = g[b];
        return a
    }
    function P(a) {
        for (var g in a) return ! 1;
        return ! 0
    }
    function ta(a) {
        try {
            return Array.prototype.slice.call(a, 0)
        } catch(g) {
            for (var b = [], c = 0, d = a.length; c < d; c++) b.push(a[c]);
            return b
        }
    }
    function f(a, g) {
        a = a || "";
        g = g || d;
        if (0 === a.indexOf("#")) return g.getElementById(a.substring(1));
        var b = [];
        if (/^[a-zA-Z]{1,}$/.test(a)) b = ta(g.getElementsByTagName(a));
        else if (0 === a.indexOf(".")) if (g.querySelectorAll) b = ta(g.querySelectorAll(a));
        else for (var c = g.getElementsByTagName("*"), e = a.substring(1), f = 0, h = c.length; f < h; f++) J(c[f], e) && b.push(c[f]);
        return b
    }
    function ua(a) {
        return "[object Array]" === Object.prototype.toString.call(a)
    }
    function Fa(a, g) {
        for (var b = 0,
        c = a.length; b < c; b++) if (a[b] === g) return ! 0;
        return ! 1
    }
    function C(a, g) {
        a && 1 === a.nodeType && ("none" === a.style.display ? a.style.display = g ? "block": a._oldDisplay || "": g && (a.style.display = "block"))
    }
    function w(a) {
        a && 1 === a.nodeType && "none" !== a.style.display && (a._oldDisplay = a.style.display || "", a.style.display = "none")
    }
    function x(a, g) {
        if (ua(a)) for (var b = 0,
        c = a.length; b < c; b++) x(a[b], g);
        else J(a, g) || (a.className = "" === a.className ? g: a.className + (" " + g))
    }
    function J(a, g) {
        if (a.className) {
            var b = a.className.split(/\s+/);
            b.unshift("000");
            b.push("000");
            return 2 < b.length && -1 < b.join(",").indexOf("," + g + ",")
        }
        return ! 1
    }
    function H(a, g) {
        if (ua(a)) for (var b = 0,
        c = a.length; b < c; b++) H(a[b], g);
        else if (J(a, g)) {
            for (var b = a.className.split(/\s+/), c = 0, d = b.length; c < d; c++) if (g === b[c]) {
                b.splice(c, 1);
                break
            }
            a.className = b.join(" ")
        }
    }
    function W(a, g) {
        var b = ("getComputedStyle" in c ? c.getComputedStyle(a) : a.currentStyle)[g];
        if ("width" === g || "height" === g) b = Math.max(parseInt(b) || 0, a["client" + Y(g)], a["offset" + Y(g)]);
        return b
    }
    function Y(a) {
        return (a + "").replace(/^[a-z]/,
        function(a) {
            return a.toUpperCase()
        })
    }
    function y(a, g, b) {
        a.addEventListener ? a.addEventListener(g, b, !1) : a.attachEvent ? a.attachEvent("on" + g, b) : a["on" + g] = b
    }
    function U(a, g) {
        try {
            a[g]()
        } catch(b) {}
    }
    function Z(a) {
        return "string" === typeof a ? c.JSON && c.JSON.parse ? c.JSON.parse(a) : eval("(" + a + ")") : a
    }
    function k(a) {
        var g = {};
        a = (a + "").replace("&&&START&&&", "");
        try {
            g = Z(a)
        } catch(b) {}
        return g
    }
    function n(a) {
        if (c.JSON && c.JSON.stringify) return c.JSON.stringify(a);
        var g = [];
        if ("object" == typeof a) {
            if (a instanceof Array) {
                var b = [];
                g.push("[");
                for (var d = 0; d < a.length; d++) b.push(n(a[d]));
                g.push(b.join());
                g.push("]")
            } else if (null != a) {
                g.push("{");
                b = [];
                for (d in a) b.push('"' + d + '":' + n(a[d]));
                g.push(b.join());
                g.push("}")
            }
            return g.join("")
        }
        return "number" !== typeof a ? '"' + (a || "") + '"': a
    }
    function p(a) {
        var g = [],
        b = "",
        c;
        for (c in a) b = typeof a[c],
        "object" !== b || "number" == b ? g.push(c + "=" + a[c]) : g.push(c + "=" + encodeURIComponent(p(a[c])));
        return g.join("&")
    }
    function l(a, g) {
        var b = d.createElement("input");
        if (! ("placeholder" in b || b._initedplace)) {
            b._initedplace = !0;
            var c = a.getAttribute("placeholder"),
            e = a.id || a.name,
            f = a.className;
            b.value = c;
            b.id = e + "_pla";
            b.className = f;
            x(a, "hideimportant");
            a.setAttribute("pla_id", e + "_pla");
            b.setAttribute("for_id", e);
            b.style.color = "#999";
            a.parentNode.insertBefore(b, a);
            y(b, "focus",
            function() {
                x(b, "hideimportant");
                H(a, "hideimportant");
                a.focus()
            });
            y(a, "blur",
            function() {
                "" == v(a.value) && (x(a, "hideimportant"), H(b, "hideimportant"))
            });
            g && (a.value = "", x(a, "hideimportant"), H(b, "hideimportant"));
            try {
                a.focus(),
                a.blur()
            } catch(h) {}
        }
    }
    function Ua(a) {
        this.key = a || "account.xiaomi.com"
    }
    function wb(a) {
        if ("object" !== typeof a) return a;
        var g = [],
        b;
        for (b in a) g.push(b + "=" + encodeURIComponent(a[b]));
        return g.join("&")
    }
    function Va(a) {
        this.id = xb++;
        for (var g in a) a.hasOwnProperty(g) && (this[g] = a[g]);
        this.xhr = new(c.XMLHttpRequest || c.ActiveXObject)("Microsoft.XMLHTTP");
        this.request()
    }
    function Ga(a) {
        a = a || {};
        var g = yb,
        b = {},
        c;
        for (c in g) c in b || c in a || (a[c] = g[c]);
        this.opt = a;
        this.init()
    }
    function zb(a) {
        ka.on(function(g, b) {
            a.style.height = Math.max(g.height, b.height) + "px";
            a.style.width = b.width + "px"
        });
        ka.onbeforeResize(function() {
            a.style.height = "auto";
            a.style.width = "100%"
        })
    }
    function la(a, g) {
        var c = W(b.layout, "height"),
        d = W(b.layout, "width");
        b.qrIframe.height = s.qrsize;
        b.qrIframe.width = s.qrsize;
        b.loginQr.style.height = c + "px";
        b.loginQr.style.width = d + "px";
        var d = b.qrIframe,
        e = s.qrsize,
        f = "",
        h = JSP_VAR;
        z("callback") && z("sid") && (h = location.search);
        if ("object" === typeof h) {
            for (var k in h) h.hasOwnProperty(k) && h[k] && (f += "&" + k + "=" + encodeURIComponent(h[k]));
            f = "?" + f.substring(1)
        } else f = h;
        d.src = "/pass/lp" + f + "&_qrsize=" + e;
        "tab" === g ? b.loginQr.style.height = c - 82 + "px": w(b.loginMain);
        C(b.loginQr, !0); ! 0 === a && x(b.body, "only_qrlogin");
        return ! 1
    }
    function va(a) {
        b.qrIframe.src = "about:blank";
        w(b.loginQr);
        C(b.loginMain, !0); ! 0 === a && x(b.body, "only_pwdlogin");
        return ! 1
    }
    function Ab(a) {
        var g = Wa(a),
        b = Bb[a],
        c = "";
        g && b && (c = m('<a href="{url}" class="btnadpt btn_{type} sns-login-link" title="{text}" data-type="{type}">                       <i class="btn_sns_icontype icon_default_{type}"></i><span>{text}</span>                     </a>', {
            url: g,
            type: a,
            text: b
        }));
        return c
    }
    function wa(a, g) {
        for (var b = f("input", a), c = 0; c < b.length; c++) {
            var d = b[c],
            e = d.name;
            if ("" === e || "none" === d.style.display || e === g) b.splice(c, 1),
            c--
        }
        return b
    }
    function Cb(a, g, c, d) {
        g = v(g);
        if ("user" === a) {
            if (g !== h.maskedPhone) return "tel" === c ? /^\d{6,}$/.test(g) : !1 === Ha(g) ? !1 : !0
        } else if ("password" === a) {
            if ("number" === c || "tel" === c) return /^\d{4,6}$/.test(g);
            if (J(d, "set-password")) return ! (8 > g.length || 16 < g.length || /^\d+$/.test(g) || /^[A-Za-z]+$/.test(g) || /^[^A-Za-z0-9]+$/.test(g))
        } else {
            if ("captCode" === a) return /^\w{4,8}$/.test(g);
            if ("repassword" === a) return g === b.rePwd.value
        }
        return ! 0
    }
    function Ia(a, g, c) {
        a = wa(a, g);
        g = 0;
        for (var d = {},
        e = 0; e < a.length; e++) {
            var f = a[e],
            h = f.name,
            k = f.value,
            l = f._type || f.type;
            "password" !== h && "repassword" !== h && "visiablepwd" !== h && (k = v(k));
            "" === k ? (K.show(h + "_" + l + "_empty", f), g++) : Cb(h, k, l, f) ? d[h] = "user" === h && "+86" !== v(b.codeValue.innerHTML) ? v(b.codeValue.innerHTML) + k: k: (K.show(h + "_" + l + "_rule", f), g++);
            if (g) break
        }
        return c ? c(g ? !1 : d) : !g
    }
    function $(a) {
        a = wa(a);
        for (var g = 0; g < a.length; g++) K.clean(a[g])
    }
    function Xa(a) {
        a = wa(a);
        for (var g = 0; g < a.length; g++) {
            var c = a[g];
            c.value = "";
            s.captchaInit && "captCode" === c.name && ma(b.captchaImg)
        }
    }
    function Ya() {
        var a = f(".form-panel", b.layout);
        t(a,
        function(a, b) {
            w(a)
        })
    }
    function l(a, b) {
        if (!s.supportPlaceholder) {
            var c = d.createElement("span"),
            e = a.parentNode,
            f = a.getAttribute("placeholder");
            c.className = "placehld";
            c.id = a.id + "_pla";
            c.innerHTML = f;
            e.insertBefore(c, a);
            e.style.position = "relative";
            c.style.position = "absolute";
            c.style.cursor = "text";
            c.style.lineHeight = W(a, "lineHeight") || 1.2;
            c.style.left = (a.offsetLeft || 0) + "px";
            c.style.top = (a.offsetTop || 0) + "px";
            b && (c.style.color = b);
            aa.on(a,
            function(a, b) {
                "" === a ? C(c) : w(c)
            });
            y(c, E.click,
            function() {
                try {
                    a.focus(),
                    w(c)
                } catch(b) {}
            })
        }
    }
    function Za(a) {
        if (!s.supportPlaceholder) {
            var b = a.parentNode;
            a = d.getElementById(a.id + "_pla");
            try {
                b.removeChild(a)
            } catch(c) {}
        }
    }
    function xa(a) {
        u.add("objectCopy", a);
        var b = {},
        c, d = {};
        for (c in a) c in a && !(c in d) && (b[c] = a[c]);
        return b
    }
    function Db(a) {
        y(a, E.focus,
        function() {
            $a(a)
        });
        y(a, E.blur,
        function() {
            clearTimeout(a.__checkInputTC)
        })
    }
    function $a(a) {
        var b = a.value,
        c = "__oldVal" in a ? a.__oldVal: a.__oldVal = b,
        d = a._inputChangeFns,
        e;
        if (b !== c) for (var f = 0; f < d.length; f++)"function" === typeof d[f] && !1 === d[f].call(a, b, c, a.__reset) && (e = !1); ! 1 !== e && (a.__oldVal = b);
        a.__reset && (a.__reset = !1);
        a.__checkInputTC = setTimeout(function() {
            $a(a)
        },
        50)
    }
    function Ha(a) {
        a = {
            miid: /^\d{3,}$/.test(a),
            phoneLike: /^\d{6,}$/.test(a),
            phone: /^\++\d{6,}$/.test(a) || /^0{2}\d{6,}/.test(a),
            emailLike: -1 !== (a + "").indexOf("@"),
            email: /^[\w.\-]+@(?:[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*\.)+[A-Za-z]{2,6}$/.test(a),
            nonum: /[^0-9]/.test(a)
        };
        return a.phoneLike || a.phone || a.email || a.miid ? a: !1
    }
    function ab(a, b) {
        B("userName", a, -3650, "/", ".xiaomi.com", 31536E4);
        var c = parseInt(a, 10) === b ? b: b + "|" + a;
        LStore.set("user", c)
    }
    function ma(a, g) {
        g = g || s.captChaURL;
        a.src = g + "&" + (new Date).getTime();
        b.captchaCode && (b.captchaCode.__reset = !0) && (b.captchaCode.value = "");
        x(b.layout, "captcha_layout")
    }
    function bb(a) {
        s.captchaInit = 1;
        b.captcha.innerHTML = s.captchaTpl;
        b.captchaCode = f("#captcha-code");
        b.captchaImg = f("#captcha-img");
        l(b.captchaCode);
        y(b.captchaImg, E.click,
        function() {
            clearTimeout(b.captchaImg.__refreshImg);
            b.captchaImg.__refreshImg = setTimeout(function() {
                ma(b.captchaImg)
            },
            100)
        });
        aa.on(b.captchaCode,
        function(a, c, d) { ! d && $(b.mainForm)
        })
    }
    function cb(a) {
        s.captchaInit && ma(b.captchaImg);
        b.captchaCode && K.clean(b.captchaCode);
        K.show(h.verifyPwd ? G.PWD_RES_ERROR: G.LOGIN_RES_ERROR, b.userName)
    }
    function Ja(a) {
        a.ignore ? K.show(G.password_number_rule) : K.show(G.password_number_rule, b.pwd)
    }
    function db() {
        K.show(G.TOKEN_EXPIRE)
    }
    function eb(a) {
        K.show(G.INTERNAL_ERROR)
    }
    function Eb(a) {
        for (var g = "",
        c = 0; 10 > c;) {
            g = decodeURIComponent(a);
            if (a === g) break;
            a = g;
            c++
        }
        a = D(a);
        a = a.replace(/\$\{(.*)\}\$/g,
        function(a, b, g) {
            return '<span class="strong-color" style="color:#ff7e00">' + b + "</span>"
        });
        b.header.innerHTML = a
    }
    function Fb() {
        var a;
        a = "<div class='search-code'><i class='icon_search'></i><input type='text' class='search-code-input'></div>" + RegionsCode.getAll({
            usual: G.POPULAR
        },
        !0, !0);
        b.codeContainerCon.innerHTML = a;
        b.searchCodeInput = f(".search-code-input", b.codeContainer)[0];
        b.recordCode = f(".record-country", b.codeContainer);
        b.usual = f(".countrycode-container-usual", b.codeContainer)[0];
        b.usualRecord = f(".record", b.usual);
        var g = "";
        t(b.usualRecord,
        function(a, b) {
            Math.random();
            for (var c = fb(); c === g;) c = fb();
            g = c;
            x(a, "code_style" + c)
        });
        aa.on(b.searchCodeInput,
        function(a, g) {
            a = v(a);
            if (0 < a.length) {
                x(b.codeContainer, "search-mode");
                var c = RegionsCode.searchLikeData(a)
            } else return H(b.codeContainer, "search-mode"),
            !1;
            t(b.recordCode,
            function(a) {
                var b = v(a.getAttribute("data-brief"));
                if (J(a.parentNode.parentNode.parentNode, "countrycode-container-usual")) return ! 1;
                a: {
                    for (var g = c,
                    g = g || [], F = 0, d; d = g[F++];) if (b === d.B) {
                        b = !0;
                        break a
                    }
                    b = !1
                }
                b ? x(a.parentNode, "selected") : H(a.parentNode, "selected")
            })
        });
        y(b.searchCodeInput, E.keydown,
        function(a) {
            a = a || c.event;
            if (13 == (a.charCode || a.keyCode)) {
                var g = f(".selected", b.codeContainer)[0];
                g && U(g, "click");
                a.returnValue = !1;
                a.preventDefault && a.preventDefault()
            }
            "cancelBubble" in a && (a.cancelBubble = !0);
            "stopPropagation" in a && a.stopPropagation()
        })
    }
    function fb() {
        var a = Math.random();
        return Math.ceil(a * Gb)
    }
    function ba() {
        b.searchCodeInput && (b.searchCodeInput.value = "");
        H(b.codeContainer, "search-mode");
        w(b.codeContainer);
        h.codeShown = !1
    }
    function gb(a) {
        var g = f(".record-country", a)[0];
        a = g.getAttribute("data-code");
        g = g.getAttribute("data-brief");
        b.codeValue.innerHTML = a;
        s.region = g;
        u.add("selectCode", a, g)
    }
    function Hb(a) {
        t(f("a", b.navTabs),
        function(b, c) {
            b.getAttribute("data-tab") === a ? x(b, "now") : H(b, "now")
        });
        t(b.tabsCon,
        function(b, c) {
            b.getAttribute("data-con") === a ? C(b, !0) : w(b)
        });
        "qr" === a ? (x(b.loginQr, "tab_qr_area"), la(!0, "tab")) : va(!0)
    }
    function hb(a) {
        v(b.userName.value) || (h.manualCodeFlag = !0);
        a.phoneLike && !a.phone && (h.manualCodeFlag && (h.manualControlCode = !1), h.manualControlCode ? (H(b.regionCode, "add_regioncode"), h.showCodeValue = !1, h.manualCodeFlag = !1, h.manualControlCode = !0, ba()) : (x(b.regionCode, "add_regioncode"), h.showCodeValue = !0));
        if (!v(b.userName.value) || a.nonum) H(b.regionCode, "add_regioncode"),
        ba(),
        h.showCodeValue = !1;
        u.add("showCodeValue", h.showCodeValue)
    }
    function Ka() {
        if (1 === h.registerPwd) return ya("setPwd"),
        !1;
        ib({
            noPwd: !0
        })
    }
    function ib(a) {
        if (h.lockSubmit) return ! 1;
        var b = M(na, a);
        h.clientAcq ? b.phoneHash = V.hash || "": b.phone = La.phone;
        b.region = s.region;
        Ajax({
            url: "/pass/tokenRegister",
            method: "POST",
            data: b,
            success: function(a) {
                h.lockSubmit = 0;
                u.add("resisterResult", a);
                a = k(a.replace("&&&START&&&", ""));
                var c = a.code;
                if (0 === c) h.clientAcq && (V.resetCookie(), h.clientAcq = !1),
                location.href = "/pass/serviceLogin" + decodeURIComponent(b.qs);
                else if (a.ignore = !0, c in N) N[c](a);
                else N.regFail(a)
            },
            error: function(a) {
                u.add("registerError", a.status, a.responseText);
                h.lockSubmit = 0
            },
            timeout: function() {
                u.add("registerTimeout", (new Date).getTime());
                h.lockSubmit = 0
            }
        });
        h.lockSubmit = 1
    }
    function za(a, b) {
        var c = "ticket" !== z("_loginSign") ? "pwd": "ticket";
        u.add("login", a, b);
        c !== h.loginType ? (I("userId", "/", "account.xiaomi.com"), I("userId", "/", "xiaomi.com"), I("cUserId", "/", "account.xiaomi.com"), I("cUserId", "/", "xiaomi.com"), c = xa(na), c._sign = "", c._loginSign = h.loginType, c._json = !0, Ajax({
            url: "/pass/serviceLogin",
            method: "GET",
            data: c,
            success: function(c) {
                u.add("loginSign", c);
                c = k(c);
                0 !== c.code ? (b._sign = c._sign, b.qs = c.qs, b.callback = c.callback, jb(a, b)) : location.href = c.location
            }
        })) : jb(a, b)
    }
    function jb(a, b) {
        if (h.lockSubmit) return ! 1;
        Ajax({
            url: a,
            method: "POST",
            data: b,
            success: function(a) {
                h.lockSubmit = 0;
                u.add("loginResult", a);
                a = k(a);
                var c = a.code,
                d = "";
                if (b.user) var e = b.user,
                d = e.replace(e.substring(3, e.length - 3), "***");
                u.add("loginCode", c);
                if (c in N) N[c](a, e, d);
                else N["default"](a, e)
            },
            error: function(a) {
                u.add("loginError", a.status, a.responseText);
                a = a.status;
                var c = b.user;
                a in N ? 0 === a ? (u.add("loginsErrorStatus", "in"), N.network({},
                c)) : (u.add("loginsErrorStatus", "out"), N[a]({},
                c)) : (u.add("loginsErrorStatus", "fail"), N.fail({},
                c));
                h.lockSubmit = 0
            },
            timeout: function() {
                u.add("loginTimeout", (new Date).getTime());
                h.lockSubmit = 0
            }
        });
        h.lockSubmit = 1
    }
    function Ib(a) {
        var b = h.clientAcq ? a.userHash: a.user; (ga = Ma[b]) || (ga = Ma[b] = {
            left: 5,
            times: 0
        });
        ga.initQuota ? kb(a) : Jb(b,
        function(b) {
            ga.left = b;
            ga.initQuota = 1;
            kb(a)
        })
    }
    function kb(a) {
        var b = Ma[h.clientAcq ? a.userHash: a.user];
        0 === b.left ? Na(b.left) : b.sending ? lb(b, !0) : (b.sending = !0, Ajax({
            url: "/pass/sendServiceLoginTicket",
            method: "post",
            data: a,
            dataType: "text",
            success: function(a) {
                u.add("sendServiceLoginTicket", a);
                b.sending = !1;
                var c = {};
                try {
                    c = k(a.replace("&&&START&&&", ""))
                } catch(d) {}
                a = c.code;
                0 === a ? (b.left = Math.max(b.left - 1, 0), b.hold = (b.times += 1) * Kb, lb(b)) : a in N ? (c.send = b, N[a](c)) : N.fail(c)
            },
            error: function() {
                b.sending = !1;
                ha(G.send_again, !1)
            }
        }))
    }
    function lb(a, b) {
        Na(a.left);
        if (!b) {
            text = G.send_hold;
            var c = function() {
                a.hold--;
                var b = text.replace("{time}", "(" + a.hold + ")");
                1 <= a.hold ? (ha(b, !0), Oa = setTimeout(function() {
                    c()
                },
                980)) : ha(G.send_again, !1)
            };
            clearTimeout(Oa);
            c()
        }
    }
    function ha(a, g) {
        b[oa].innerHTML = a;
        g ? x(b[oa], "disabled") : H(b[oa], "disabled")
    }
    function Jb(a, b) {
        var c = {
            contentType: 160033,
            userId: -1
        };
        h.clientAcq ? c.addressHash = a: c.address = a;
        Ajax({
            url: "/pass/sms/quota",
            method: "POST",
            data: c,
            dataType: "text",
            success: function(a) {
                var c = {};
                try {
                    c = k(a.replace("&&&START&&&", ""))
                } catch(d) {}
                0 === c.result ? b(parseInt(c.info) || 0) : b(0)
            },
            error: function() {
                b(0)
            }
        })
    }
    function Na(a) {
        var b = G.leftTimesText,
        c = "getSmsCode" === oa ? K: acError;
        2 >= a ? (b = 0 === a ? G.nochance: m(b, {
            left: a
        }), c.show(b)) : c.clean()
    }
    function Lb(a, c) {
        S = c;
        S.data.nickname ? f(".usernameShow", b[a])[0] && (f(".usernameShow", b[a])[0].innerText = S.data.nickname) : w(f(".us-userName", b[a])[0]);
        f(".us-portraitUrl", b[a])[0] && S.data.portrait && (f(".us-portraitUrl", b[a])[0].innerHTML = '<img src="' + S.data.portrait + '">');
        f(".phoneShow", b[a])[0] && (f(".phoneShow", b[a])[0].innerText = S.data.phone);
        f(".useridShow", b[a])[0] && (f(".useridShow", b[a])[0].innerText = S.data.maskedUserId)
    }
    function ya(a, c) {
        Ya();
        c && Lb(a, c);
        "setPwd" === a && t(f("input", b.setPwd),
        function(a, b) {
            l(a)
        });
        s.loginBanner.hideMainbox && w(b.bannerIframe);
        C(b[a], !0);
        "acConfirm" === a && (C(b.acConfirmOkBtn), C(b.acConfirmNoBtn));
        w(f(".n-footer")[0]);
        h.currentView = a
    }
    function Aa() {
        Ya();
        K.clean();
        clearTimeout(Oa);
        ha(G.INIT_CODE_TEXT, !1);
        h.isMihomeMemberType && C(b.bannerIframe, !0);
        C(b.loginMain);
        h.currentView = "loginMain"
    }
    function Mb() {
        if (T.tmpVal) for (var a in T.data) - 1 !== T.tmpVal.indexOf(a) && (u.add("COMMAND", a), "function" === typeof T.data[a] && T.data[a](), T.tmpVal = "", T.history.push(a))
    }
    function Ba(a, c) { ! 0 === c && w(b.changeLoginType);
        "block" === f(".err_tip", b[h.currentView])[0].style.display && $(b.mainForm);
        b.toggleVisiable.__visiable && ("ticket" === a ? (C(b.pwd, !0), w(b.pwdVisiable)) : (w(b.pwd), C(b.pwdVisiable)));
        Za(b.pwd);
        Za(b.userName);
        h.loginType = a;
        h.enableCode = "ticket" === h.loginType ? ca ? !0 : !1 : s.enableCode;
        mb();
        if ("pwd" === a) {
            H(b.regionCode, "add_regioncode");
            H(b.loginPanel, "sms_login");
            w(b.smsCodePanel);
            b.pwd.value = "";
            b.userName.setAttribute("_type", "text");
            b.pwd.setAttribute("_type", "password");
            try {
                b.userName.type = "text",
                b.pwd.type = "password"
            } catch(d) {}
            b.userName.setAttribute("placeholder", "邮箱/手机号码/小米ID");
            b.pwd.setAttribute("placeholder", "密码");
            var e = f(".err_tip", b.loginMain)[0];
            e.parentNode.insertBefore(b.captcha, e);
            X(O.OUTERLINK, !0);
            e = Ha(b.userName.value, !0);
            h.enableCode && hb(e)
        } else if ("ticket" === a) {
            b.userName.value && !/^\d{6,}$/.test(b.userName.value) && h.maskedPhone !== b.userName.value && (b.userName.value = "");
            ca || (b.codeValue.innerHTML = "+86", x(b.regionCode, "disable"));
            x(b.loginPanel, "sms_login");
            x(b.regionCode, "add_regioncode");
            C(b.smsCodePanel, !0);
            b.pwd.value = "";
            b.userName.setAttribute("_type", "tel");
            if (/FP2801 Build/i.test(navigator.userAgent)) b.pwd.setAttribute("_type", "tel"),
            b.userName.type = "tel",
            b.pwd.type = "tel";
            else {
                b.pwd.setAttribute("_type", "number");
                try {
                    b.userName.type = "tel",
                    b.pwd.type = "number"
                } catch(k) {}
            }
            b.userName.setAttribute("placeholder", G.PHONE_NUM);
            b.pwd.setAttribute("placeholder", G.SMS_CODE);
            b.pwd.parentNode.parentNode.insertBefore(b.captcha, b.pwd.parentNode);
            X(O.OUTERLINK)
        } ! b.userName.value && l(b.userName); ! b.pwd.value && l(b.pwd)
    }
    function mb() {
        var a = s.loginBanner.pwdText || "",
        c = s.loginBanner.smsText || "";
        "ticket" === h.loginType ? (b.loginButton.value = c ? c: "立即登录/注册", b.changeLoginType.innerText = a ? a: "用户名密码登录") : (b.loginButton.value = a ? a: "登录", b.changeLoginType.innerText = c ? c: "手机短信登录/注册")
    }
    var Pa = c.MiLogin || (c.MiLogin = {}),
    Nb = function() {
        var a = location.hostname;
        return - 1 < a.indexOf("onebox") ? "onebox": -1 < a.indexOf("preview") ? "preview": "release"
    } (),
    u = function() {
        var a = [];
        return {
            add: function(b, d, e) {
                a.push({
                    title: b,
                    message: d,
                    more: e,
                    time: r(new Date)
                }); - 1 !== (location.search + "").indexOf("debug") && "console" in c && "function" === typeof c.console.log && console.log(arguments)
            },
            get: function() {
                return a
            }
        }
    } (),
    da = function() {
        var a = navigator.userAgent,
        b = {};
        /\s+chrome\/([\d\.]*)/i.test(a) ? (b.name = "Chrome", b.version = parseInt(RegExp.$1)) : /msie\s+(\d+\.\d+)/i.test(a) ? (b.name = "IE", b.version = parseFloat(RegExp.$1)) : /\s+firefox\/([\d\.]*)/i.test(a) ? (b.name = "Firefox", b.version = parseInt(RegExp.$1)) : /applewebKit\/([\d\.]*)/i.test(a) ? (b.name = "Webkit", b.version = parseInt(RegExp.$1), /miuibrowser\/([\d\.]*)/i.test(a) && (b.name = "MIUI Browser", b.version = parseInt(RegExp.$1)), /version\/([\d\.]*)\s+Safari/i.test(a) && (b.name = "Safari", b.version = parseInt(RegExp.$1))) : /trident\/([\d\.]*)/i.test(a) ? (a = a.match(/rv:([\d\.]*)/)) && 2 <= a.length ? (b.name = "IE", b.version = parseFloat(a[1])) : (b.name = "Trident", b.version = RegExp.$1) : (b.name = a, b.version = 0);
        return b
    } (),
    nb = function() {
        var a = d.createElement("a");
        a.target = "_blank";
        d.body.appendChild(a);
        var b = 0,
        e = null;
        return function(f, h) {
            if ("_self" === h) location.href = f;
            else {
                a.href = f;
                var k = (new Date).getTime();
                if (! (e === f && 1E3 > k - b)) {
                    e = f;
                    b = k;
                    try {
                        var l = d.createEvent("MouseEvents");
                        l.initMouseEvent("click", !0, !0, c);
                        a.dispatchEvent(l)
                    } catch(m) {
                        a.click()
                    }
                }
            }
        }
    } ();
    try {
        var Qa = !!c.localStorage
    } catch(Vb) {
        Qa = !1
    }
    Ua.prototype = {
        key: "account.xiaomi.com",
        _read: Qa ?
        function() {
            var a = "";
            try {
                a = c.localStorage.getItem(this.key)
            } catch(b) {}
            a = (new Function("", "return " + a))();
            return "object" == typeof a && a ? a: {}
        }: function() {
            return {}
        },
        _save: Qa ?
        function(a) {
            try {
                c.localStorage.setItem(this.key, n(a))
            } catch(b) {
                u.add("setItem \u629b\u51fa\u5f02\u5e38", da.name + " " + da.version)
            }
        }: function() {
            return ! 1
        },
        _readAndGc: function(a) {
            var b = this._read(),
            c;
            for (c in b) {
                var d = b[c];
                d.expires && (new Date).getTime() - d.time >= d.expires && delete b[c]
            }
            this._save(b);
            return a ? b[a] : b
        },
        remove: function(a) {
            var b = this._readAndGc();
            delete b[a];
            this._save(b)
        },
        get: function(a) {
            a = this._readAndGc(a) || {};
            return a.value ? a.value: null
        },
        set: function(a, b, c) {
            if (!a) return ! 1;
            var d = this._readAndGc(),
            e = (new Date).getTime();
            d[a] = {
                value: b,
                expires: c,
                time: e
            };
            this._save(d)
        }
    };
    c.LStore = new Ua("account.xiaomi.com");
    var xb = 0;
    Va.prototype = {
        request: function() {
            var a = this.url || "?",
            b = this.data || {},
            d = (this.method || "GET").toUpperCase(),
            e = this;
            this.xhr.onreadystatechange = function() {
                e.state = e.xhr.readyState;
                u.add("xhrReadyState", e.xhr.readyState);
                4 == e.xhr.readyState && (c.clearTimeout(e.timeouthandler), e.status = e.xhr.status, u.add("xhrStatus", e.status), 200 == e.xhr.status ? e.success && e.success(e.xhr.responseText, e.xhr) : (u.add("xhrError"), e.error && e.error(e.xhr)))
            };
            b = wb(b);
            "GET" == d ? (a = -1 === a.indexOf("?") ? a + ("?" + b + "&_dc=" + (new Date).getTime()) : a + ("&" + b + "&_dc=" + (new Date).getTime()), b = null) : a += "?_dc=" + (new Date).getTime();
            u.add("initopen");
            this.xhr.open(d, a, !0);
            this.xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            this.timeouthandler = c.setTimeout(function() {
                u.add("intoTimeout");
                e.timeout()
            },
            5E3);
            u.add("initsend");
            this.xhr.send(b)
        },
        timeout: function() {}
    };
    c.Ajax = function(a) {
        return new Va(a)
    };
    var ka = {
        fns: [],
        beforeFns: [],
        inited: !1,
        on: function(a) {
            "function" === typeof a && this.fns.push(a); ! this.inited && this.init();
            c.onresize && c.onresize()
        },
        off: function(a) {
            if ("function" === typeof a) for (var b = 0,
            c = this.fns.length; b < c; b++) if (a === this.fns[b]) return this.fns.splice(b, 1),
            !0;
            return ! 1
        },
        onbeforeResize: function(a) {
            "function" === typeof a && this.beforeFns.push(a)
        },
        beforeExec: function() {
            for (var a = 0,
            b; b = this.beforeFns[a++];) b && b.call(c)
        },
        exec: function() {
            this.beforeExec();
            var a;
            a = c.innerWidth || 0;
            var b = c.innerHeight || 0;
            a || ("CSS1Compat" == d.compatMode ? (a = d.documentElement.clientWidth, b = d.documentElement.clientHeight) : (a = d.body.clientWidth, b = d.body.clientHeight));
            a = {
                width: a,
                height: b
            };
            for (var b = d.documentElement,
            e = d.body,
            f = Math.max(b.clientHeight || 0, e.scrollHeight, b.scrollHeight || 0, e.offsetHeight, b.offsetHeight || 0), b = {
                width: Math.max(b.clientWidth || 0, e.scrollWidth, b.scrollWidth || 0, e.offsetWidth, b.offsetWidth || 0),
                height: f
            },
            e = d.documentElement, f = d.body, e = {
                scleft: Math.max(e.scrollLeft || 0, f.scrollLeft),
                sctop: Math.max(e.scrollTop || 0, f.scrollTop)
            },
            f = 0, h; h = this.fns[f++];) h && h.call(c, a, b, e)
        },
        init: function() {
            var a = null,
            b = this;
            c.onresize = function() {
                c.clearTimeout(a);
                a = c.setTimeout(function() {
                    b.exec()
                },
                60)
            }
        },
        triggle: function() {
            this.exec()
        }
    },
    Ra = {},
    Q = null,
    Ca = d.body,
    yb = {
        title: "{Modal-DefTitle}",
        cls: "",
        titleCls: "",
        bodyCls: "",
        html: "",
        afterRender: function() {}
    },
    Ob = function() {
        var a = 0;
        return function() {
            return "modal-id-" + a++
        }
    } ();
    Ga.prototype = {
        init: function() {
            var a = this.opt;
            Q || (a.renderTo ? Q = a.renderTo: (Q = d.createElement("div"), x(Q, "modal_container"), Q.innerHTML = '<div class="modal_msk"></div>', Ca.appendChild(Q), !a.modalfixed && zb(Q)));
            this.id = a.id || Ob();
            var b = this.modal = Ra[this.id],
            e = this;
            b || (b = this.modal = d.createElement("div"), x(b, "modal_tip"), this.hide(), b.id = this.id, b.innerHTML = '<div class="modal_tip_flex"><div class="modal_tip_hd modal-header"><div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div><div class="modal-header-text modal_tip_title"></div><a href="javascript:void(0)" title="" class="modal-header-close btn_mod_close"><span>关闭</span></a></div><div class="modal_tip_bd modal-body"></div></div>', a.renderTo ? a.renderTo.appendChild(b) : Q.appendChild(b), this.header = f(".modal-header", b)[0], this.title = f(".modal-header-text", b)[0], this.body = f(".modal-body", b)[0], this.closeBtn = f(".modal-header-close", b)[0], y(this.closeBtn, "click",
            function() {
                e.close()
            }), this.render(a), Ra[this.id] = b, this.resizeModal = function(e, d, f) {
                d = b;
                var h = "getComputedStyle" in c ? c.getComputedStyle(d) : d.currentStyle;
                d = {
                    width: Math.max(parseInt(h.width) || 0, d.clientWidth, d.offsetWidth),
                    height: Math.max(parseInt(h.height) || 0, d.clientHeight, d.offsetHeight)
                };
                h = e.height;
                e = e.width;
                var F = f.sctop;
                f = f.scleft;
                a.deviceType && "mobile" === a.deviceType || (d && d.height && (b.style.marginTop = d.height < h ? (h - d.height) / 2 + "px": 0 + F + "px", b.style.top = 0), d && d.width && (b.style.marginLeft = d.width < e ? (e - d.width) / 2 + "px": 0 + f + "px", b.style.left = 0))
            },
            a.modalfixed && (this.resizeModal = function() {}), !a.renderTo && ka.on(this.resizeModal));
            this.show()
        },
        show: function() {
            if (this.modal && (C(Q, "hide"), C(this.modal, "hide"), !this.opt.renderTo)) {
                var a = this;
                setTimeout(function() { ! a.opt.modalfixed && ka.triggle()
                },
                200)
            }
        },
        beforeClose: function() {
            if (this.opt.beforeClose) return this.opt.beforeClose.call(this)
        },
        close: function(a) {
            if (this.modal) {
                if (!1 === this.beforeClose()) return 0;
                a ? (ka.off(this.resizeModal), Q.removeChild(this.modal), this.modal = null, Ra[this.id] = null, w(Q, "hide")) : this.hide()
            }
        },
        hide: function() {
            w(Q, "hide");
            w(this.modal, "hide")
        },
        render: function(a) {
            this.title.innerHTML = a.title;
            this.body.innerHTML = a.html;
            a.titleCls && x(this.title, a.titleCls);
            a.bodyCls && x(this.body, a.bodyCls);
            a.cls && x(this.modal, a.cls);
            a.afterRender.call(this)
        },
        update: function(a, b) {
            b && (a.titleCls && H(this.title, a.titleCls), a.bodyCls && H(this.body, a.bodyCls), a.cls && H(this.modal, a.cls));
            this.render(a)
        }
    };
    c.Modal = Ga;
    var Sa; (function() {
        Sa = new Ga({
            title: "提示",
            cls: "mod_acc_tip security-controller-modal",
            html: '<div id="sect-controller-panel" class="security_controller_panel"><h4>您需要安装安全控件，才可使用安全登录。</h4><p>控件可对您的密码进行加密保护，提升账户安全性。</p><p>请点击“立即安装控件”按钮，并根据提示进行安装。</p><div class="tip_msg">完成安装后，请重新启动浏览器</div></div><div class="tip_btns"><a title="立即安装控件" href="https://account.xiaomi.com/static/res/0369340/account-static/static/mipay/XiaomiCtrl.exe" class="btn_tip btn_commom btn-action-controller">立即安装控件</a></div>',
            customDevice640: !0,
            modalfixed: !0,
            afterRender: function() {}
        });
        Sa.close()
    })();
    var ca = JSP_VAR.dataCenterZone && "China" != JSP_VAR.dataCenterZone,
    ea = JSP_VAR.loginMethods,
    s = {
        locale: 0 === JSP_VAR.locale.indexOf("zh") ? "zh_CN" === JSP_VAR.locale ? "zh_CN": "zh_TW": 0 === JSP_VAR.locale.indexOf("en_") ? "en": JSP_VAR.locale,
        md5pwd: !0,
        infoUrl: "/pass/js/info?type=notice",
        logoWidth: 50,
        qrsize: function() {
            var a = z("_qrsize");
            return parseInt(a) || 270
        } (),
        loginType: function() {
            var a = "";
            JSP_VAR.dataCenterZone && "India" === JSP_VAR.dataCenterZone && (a = "ticket");
            var a = z("_loginType") || a,
            b = "all pwd qr ticket pwdonly ticketonly".split(" "),
            c = parseInt(a) || 0;
            return Fa(b, a) ? a: b[c] || "all"
        } (),
        region: JSP_VAR.region,
        copyRight: ca ? "小米公司版权所有": "小米公司版权所有-京ICP备10046444-<a class='beian-record-link' target='_blank'><span></span>京公网安备11010802020134号</a>-京ICP证110507号",
        copyRightHide: "PC" !== JSP_VAR.deviceType,
        getPhoneOn: !1,
        enableSMS: !ca,
        privacyLink: JSP_VAR.privacyLink,
        samplingRate: JSP_VAR.isPreview || location.href.indexOf("_debugMode") ? 100 : _t_.samplingRate,
        samplingBase: _t_.samplingBase,
        supportPlaceholder: "placeholder" in d.createElement("input"),
        captchaNeed: LStore.get("loginNeedCode"),
        twoStepURL: "/pass/2StepLogin/login",
        enableVisiablePwd: "PC" !== JSP_VAR.deviceType,
        enableCode: function() {
            var a = !(!ca && "zh_CN" === JSP_VAR.locale),
            b = navigator.userAgent;
            t(["Windows CE", "MSIE 7.0; Windows Phone OS 7.0", "MSIE 6.0; Windows NT 5.1"],
            function(c, d) { - 1 !== b.indexOf(c) && (a = !1)
            });
            return a
        } (),
        snsDisabled: ca ? [] : ["facebook"],
        snsDefault: function() {
            var a = "qq weibo alipay weixin facebook google".split(" "),
            b = "";
            /micromessenger/i.test(navigator.userAgent) && (b = "weixin");
            z("_snsdefault") && Fa(a, z("_snsdefault")) && (b = z("_snsdefault"));
            return b
        } (),
        snsNone: function() {
            var a = "";
            z("_snsnone") && (a = z("_snsnone"));
            return a
        } (),
        default1px_gif: "data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==",
        beianRecordLink: "http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134",
        beianRecordImg: "https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png",
        captchaTpl: '<div class="lgncode c_b"><label class="labelbox code_label"><input id="captcha-code" class="code" name="captCode" type="text" placeholder="图片验证码" autocomplete="off"></label><img class="chkcode_img" id="captcha-img" src="about:blank" alt="点击可刷新图片验证码"></div>',
        captChaURL: "/pass/getCode?icodeType=login",
        cookieUsageTpl: '<i class="warning_white"></i><div class="text_content"><p class="warning_text">请注意！</p><p>本网站使用cookie，用于在您的电脑中储存信息。这些cookie可以使网站正常运行，以及帮助我们改进用户体验。使用本网站，即表示您接受放置这些cookie。</p></div><button class="close_cookie_usage close-cookie-usage"><i class="icon_close"></i><span class="btn-text">同意并关闭提示</span></button>',
        oauthInitNum: 2,
        oauthTpl: '<div class="oauth_box"><p class="title">登录即同意该应用获得以下权限</p><div class="scope_list"></div><div class="oauth_wrap clearfix"><a href="javascript:;" class="wrap_more fl">更多</a><i class="icon_caret fl"></i></div></div>',
        loginBanner: function() {
            var a = {};
            "mistore" === z("_bannerBiz") ? (a.name = "mistore", a.src = "https://s1.mi.com/loginbanner.html", a.cls = "stylepc", a.qrName = "使用<span>小米商城APP</span>扫一扫") : "scfPortal" === z("_bannerBiz") ? (a.name = "scfPortal", a.src = "https://scf.mi.com/loginbanner.html", a.cls = "stylepc") : "mihomeMember" === z("_bannerBiz") ? (a.name = "mihomeMember", a.src = "https://wx.men.mi.com/member/loginbanner.html", a.hideMainbox = !0, a.smsText = "短信登录", a.pwdText = "密码登录") : "youpin" === z("_bannerBiz") && (a.name = "youpin", a.src = "https://s1.mi.com/loginbanner.html", a.customizeTitle = "米家有品");
            return a
        } (),
        customizeArr: [{
            name: "mistore",
            deviceType: "PC"
        },
        {
            name: "scfPortal",
            deviceType: "PC"
        },
        {
            name: "mihomeMember",
            deviceType: "mobile",
            env: "weixin"
        },
        {
            name: "youpin",
            deviceType: "PC"
        }]
    },
    Pb = s.enableCode,
    ob;
    ob = ea && ea.length && ua(ea) ? ea[0].toLowerCase() : "pwd";
    var h = {
        lockSubmit: 0,
        codeShown: !1,
        codeInit: !1,
        enableCode: Pb,
        loginType: ob,
        registerPwd: 0,
        clientAcq: !1,
        maskedPhone: "",
        currentView: "loginMain",
        showCustomPage: function() {
            if (s.loginBanner && s.loginBanner.name) {
                var a = {
                    deviceType: JSP_VAR.deviceType,
                    name: s.loginBanner.name
                };
                "mihomeMember" === s.loginBanner.name && (a.env = s.snsDefault);
                for (var b = 0; b < s.customizeArr.length; b++) if (L(a, s.customizeArr[b])) return ! 0
            }
            return ! 1
        } ()
    };
    h.isMihomeMemberType = h.showCustomPage && "mihomeMember" === s.loginBanner.name;
    var O = {
        LOGO: 1,
        QRTRIGGER: 2,
        FOOTER: 4,
        SNSDEFAULT: 8,
        SNSLOGIN: 16,
        SMSBTN: 256,
        OUTERLINK: 64
    },
    Ca = d.body,
    E = {
        click: "ontap" in d.body ? "tap": "click",
        focus: "focus",
        blur: "blur",
        keyup: "keyup",
        keypress: "keypress",
        keydown: "keydown"
    },
    G = {
        SMS_CODE: "短信验证码",
        PHONE_NUM: "手机号码",
        VERIFY_PASSWORD: "需要验证您的密码",
        VERIFY_PASSWORD_SUBMIT: "验证",
        user_text_empty: "请输入帐号",
        user_tel_empty: "请输入手机号",
        user_text_rule: "用户名不正确",
        user_tel_rule: "手机号格式不正确",
        password_password_empty: "请输入密码",
        repassword_password_empty: "请输入确认密码",
        password_password_rule: "密码长度8~16位，数字、字母、字符至少包含两种",
        repassword_password_rule: "密码输入不一致",
        PASSWORD_FORMAT: "密码长度8~16位，数字、字母、字符至少包含两种",
        visiablepwd_text_empty: "请输入密码",
        password_number_empty: "请输入短信验证码",
        password_number_rule: "短信验证码不正确",
        password_tel_empty: "请输入短信验证码",
        password_tel_rule: "短信验证码不正确",
        captCode_text_empty: "请输入图片验证码",
        captCode_text_rule: "验证码不正确",
        nochance: "您今天已经发送太多短信，请换个时间或改用其他验证方式",
        send_again: "重新发送",
        send_hold: "重新发送{time}",
        leftTimesText: "您今天还能发送{left}条短信",
        INIT_CODE_TEXT: "获取验证码",
        Register_Error: "注册失败",
        TOKEN_EXPIRE: "验证信息已过期，请重试",
        USER_RES_ERROR: "用户名不正确",
        PWD_RES_ERROR: "密码不正确",
        PWD_INPUT_EMPTY: "请输入密码",
        CODE_INPUT_ERROR: "验证码不正确",
        CODE_RES_ERROR: "验证码不正确",
        CONFIRM_ACC_TIP: "注册新帐号后，将无法使用{phone}登录帐号{username}",
        No_PWD_USER_TIP: "无密码用户请选择短信登录或点击忘记密码来找回密码",
        LOGIN_RES_ERROR: "用户名或密码不正确",
        TooMuchRegister: "此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试",
        REFRESH_IMG_TIP: "点击图片刷新验证码",
        LOGIN_FORZEN: "此帐号已被冻结，暂时无法登录",
        POPULAR: "常用",
        INTERNAL_ERROR: "系统错误",
        NETWORK_ERROR: "网络超时，请稍后再试",
        PHONE_INPUT_ERROR: "手机号格式不正确"
    },
    Bb = {
        qq: "QQ登录",
        weibo: "微博登录",
        weixin: "微信登录",
        alipay: "支付宝登录",
        facebook: "Facebook登录",
        google: "Google登录"
    },
    b = {
        body: d.body,
        layout: f("#layout"),
        header: f("#login-title"),
        loginMain: f("#login-main"),
        loginQr: f("#login-qrcode"),
        loginButton: f("#login-button"),
        qrIframe: f("#qriframe"),
        qrTrigger: f("#qrcode-trigger"),
        qrClose: f("#qrcode-close"),
        regionCode: f("#region-code"),
        codeSelector: f("#countrycode_selector"),
        codeContainer: f("#countrycode_container"),
        codeContainerCon: f("#countrycode_container_con"),
        codeValue: f("#countrycode_value"),
        manualCode: f("#manual_code"),
        userName: f("#username"),
        snsLoginItems: f(".sns-login-link"),
        pwd: f("#pwd"),
        outerLink: f(".outer-link"),
        captcha: f("#captcha"),
        langSelect: f(".lang-select-li"),
        mainForm: f("#login-main-form"),
        error: f("#error-outcon"),
        errorForbidden: f("#error-forbidden"),
        accountInfo: f("#account-info"),
        accountAvator: f("#account-avator"),
        accountAvatorCon: f("#account-avator-con"),
        accountDisplayname: f("#account-displayname"),
        snsDefaultCon: f(".sns-default-container")[0],
        snsLoginCon: f(".sns-login-container")[0],
        recordLink: f(".beian-record-link")[0],
        cookieUsage: f("#cookie-usage-notify"),
        pwdVisiable: s.enableVisiablePwd && f("#visiablePwd"),
        toggleVisiable: f(".pwd-visiable")[0],
        pwdEye: f(".pwd-eye"),
        msgPrivacy: f("#msg-privacy"),
        securityControllerPanel: f(".security_Controller")[0],
        securityController: f("#trustSecurityController"),
        navTabs: f("#nav-tabs"),
        tabsCon: f(".tabs-con"),
        copyRight: f(".nf-intro")[0],
        bannerIframe: f("#bgiframe"),
        customQrName: f("#custom-qr-name"),
        loginPanel: f(".login-panel")[0],
        smsCodePanel: f("#sms-code-panel"),
        phone: f("#phoneNum"),
        smsCode: f("#ticket"),
        getSmsCode: f("#getSMSCode"),
        changeLoginType: f("#ChangeLoginType"),
        acBox: f(".ac-box")[0],
        acRegister: f("#ac-register"),
        acConfirm: f("#ac-confirm"),
        loadingMask: f("#loadingMask"),
        acqTipsMain: f(".acq_tips")[0],
        setPwd: f("#set-pwd"),
        registerButton: f("#register-button"),
        rePwd: f(".re-password")[0]
    };
    b.acRegisterOkBtn = f(".ok_btn", b.acRegister)[0];
    b.acRegisterNoBtn = f(".no_btn", b.acRegister)[0];
    b.agreeCheckBox = f(".icon_select", b.acRegister)[0];
    b.acqTipsReg = f(".acq_tips", b.acRegister)[0];
    b.agreeLink = f(".agreement_link", b.acRegister)[0];
    b.privacyLink = f(".privacy_link", b.acRegister)[0];
    b.acConfirmOkBtn = f(".ok_btn", b.acConfirm)[0];
    b.acConfirmNoBtn = f(".no_btn", b.acConfirm)[0];
    b.acqTipsConf = f(".acq_tips", b.acConfirm)[0];
    b.acConfirmBackBtn = f(".back_btn", b.acConfirm)[0];
    b.setPwdInput = f("input", b.setPwd);
    var na = {
        _json: "true",
        callback: JSP_VAR.callback,
        sid: JSP_VAR.sid,
        qs: JSP_VAR.qs,
        _sign: JSP_VAR._sign,
        serviceParam: JSP_VAR.serviceParam
    },
    La = {
        phone: ""
    },
    S = {},
    N = {
        0 : function(a, b, c) {
            h.clientAcq && (V.resetCookie(), h.clientAcq = !1);
            u.add("loginPost", "success", a);
            LStore.remove("loginNeedCode");
            u.add("securityStatus", a.securityStatus);
            0 === (a.securityStatus || 0) ? (ab(c, a.userId), href = a.location) : href = a.notificationUrl;
            u.add("href", href);
            location.href = href
        },
        81003 : function(a, b, c) {
            u.add("loginPost", "step2", a);
            LStore.remove("loginNeedCode");
            ab(c, a.userId);
            c = xa(na);
            c.user = encodeURIComponent(b);
            a.qs ? c.qs = encodeURIComponent(a.qs) : delete c.qs;
            a.userId && (c.userId = encodeURIComponent(a.userId));
            a.phone && (c.phoneHint = encodeURIComponent(a.phone));
            a.backupPhone && (c.backupPhone = encodeURIComponent(a.backupPhone));
            c._sign = encodeURIComponent(a._sign);
            c.callback = encodeURIComponent(a.callback);
            c.sid = encodeURIComponent(a.sid);
            c.app = !0;
            a = ["_locale", "_customDisplay", "lsrp_appName", "mini"];
            b = 0;
            for (var d, e; d = a[b++];)(e = z(d)) && (c[d] = encodeURIComponent(e));
            u.add("twoStepLogin", "queryObj", c);
            c = s.twoStepURL + "?" + p(c);
            location.href = c
        },
        70016 : cb,
        20003 : function() {
            K.show(G.USER_RES_ERROR, b.userName)
        },
        87001 : function(a, c) {
            var d = !0;
            s.captchaNeed || (s.captchaNeed = 1, LStore.set("loginNeedCode", "1", 9E5));
            s.captchaInit || (d = !1, bb(a.captchaUrl));
            ma(b.captchaImg);
            d && K.show(G.CODE_RES_ERROR, b.captchaCode);
            a.send && ha(G.send_again, !1)
        },
        350008 : function(a) {
            K.show(G.LOGIN_FORZEN, b.userName)
        },
        403 : function(a) {
            C(b.errorForbidden, !0)
        },
        fail: eb,
        10001 : eb,
        network: function(a) {
            K.show(G.NETWORK_ERROR)
        },
        "default": cb,
        21327 : db,
        21314 : db,
        70002 : function() {
            K.show(G.No_PWD_USER_TIP)
        },
        70014 : Ja,
        10031 : Ja,
        10017 : Ja,
        70008 : function() {
            K.show(G.user_tel_rule, b.userName)
        },
        70009 : function() {
            K.show(G.user_tel_empty, b.userName)
        },
        70022 : function(a) {
            a.send && (Na(ga.left = 0), ha(G.send_again, !1))
        },
        20023 : function() {
            K.show(G.TooMuchRegister);
            w(b.acConfirmOkBtn);
            w(b.acConfirmNoBtn)
        },
        regFail: function() {
            K.show(G.Register_Error)
        }
    },
    Ta = {
        ENTER: 13,
        SHIFT: 16,
        CTRL: 17,
        ALT: 18,
        ESC: 27,
        DEL: 46,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        SPACE: 32,
        WIN: 91,
        COMMAND: 91,
        DOWN: 40
    };
    t("ABCDEFGHIGKLMNOPQRSTUVWXYZ".split(""),
    function(a, b) {
        Ta[a] = a.charCodeAt()
    });
    t("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIGKLMNOPQRSTUVWXYZ".split(""),
    function(a) {
        a.charCodeAt()
    });
    var T = {
        data: {
            "*#*#284#*#*": function() {
                var a = "";
                t(u.get(),
                function(b) {
                    try {
                        a += D(n(b)) + "<br/>"
                    } catch(c) {
                        a += "stringfy \u51fa\u9519<br>"
                    }
                });
                d.write(a);
                d.close()
            },
            "*h": function() {
                nb("https://static.account.xiaomi.com/html/faq/faqList.html");
                this["*h"] = null
            },
            "-h": function() {
                nb("https://static.account.xiaomi.com/html/faq/faqList.html");
                this["-h"] = null
            },
            "*#*#pwd#*#*": function() {
                s.md5pwd = !s.md5pwd
            }
        },
        history: [],
        tmpVal: ""
    },
    pb = function() {
        var a = {};
        y(Ca, E.keydown,
        function(b) {
            b = b || c.event;
            var d = b.keyCode || b.charCode,
            e = b.target || b.srcElement,
            f;
            d in a && t(a[d] || [],
            function(a, b) { ! 1 === a.call(e || c) && (f = !1)
            }); ! 1 === f && (b.returnValue = !1, b.preventDefault && b.preventDefault())
        });
        return {
            on: function(b, c) { (a[b] || (a[b] = [])).push(c)
            },
            off: function(b, c) {
                var d = a[b] || (a[b] = []);
                t(d,
                function(a, b) {
                    c === a && d.splice(b, 1)
                })
            }
        }
    } (),
    Wa = function() {
        var a = {
            qq: "100284651",
            weibo: "2996826273",
            weixin: "wxxmzh",
            alipay: "2088011127562160",
            facebook: "222161937813280",
            google: "google"
        },
        b = decodeURIComponent(z("third"));
        b || (b = encodeURIComponent(JSP_VAR.callback) + "&sid=" + JSP_VAR.sid);
        var c = {},
        d;
        for (d in a) c[d] = "/pass/sns/login/auth?" + ["appid=" + a[d], "weixin" === d ? "scope=snsapi_login": "", "callback=" + b].join("&");
        return function(a) {
            return a ? c[a] : c
        }
    } (),
    Qb = function() {
        for (var a = location.search.substring(1).split("&"), b = 0; b < a.length; b++) 0 === a[b].indexOf("_locale=") && (a.splice(b, 1), b--);
        return function(b) {
            return "?" + a.join("&") + "&_locale=" + b
        }
    } (),
    K = function() {
        return {
            show: function(a, c) {
                var d = G[a] || a,
                e = f(".err_tip", b[h.currentView])[0],
                k = f(".error-con", e)[0];
                c && !h.isMihomeMemberType && x(c.parentNode, "error_bg");
                k.innerHTML = d;
                H(e, "pwd_tip");
                C(e, !0)
            },
            clean: function(a) {
                var c = f(".err_tip", b[h.currentView])[0],
                d = f(".error-con", c)[0];
                a && H(a.parentNode, "error_bg");
                a && J(a, "set-password") ? (x(c, "pwd_tip"), d.innerHTML = G.PASSWORD_FORMAT) : (w(c), d.innerHTML = "")
            }
        }
    } (),
    aa = function() {
        return {
            on: function(a, b) {
                var c = a._inputChangeFns;
                c || (c = a._inputChangeFns = [], Db(a));
                c.push(b)
            },
            off: function(a, b) {
                for (var c = a._inputChnageFns,
                d = 0; d < c.length; d++) b === c[d] && (c.splice(d, 1), d--)
            }
        }
    } (),
    X = function() {
        return function(a, b) {
            if ("number" === typeof a) for (var c = 0; 8 >= c; c++) {
                var d = a & 1 << c,
                e = b,
                h = f("#custom_display_" + d);
                d && (e ? C(h) : w(h))
            }
        }
    } (),
    Gb = 5;
    _t_.htmlLoadEnd = (new Date).getTime();
    var Kb = 60,
    Oa = null,
    Ma = {},
    ga = {},
    oa = "getSmsCode";
    y(b.getSmsCode, "click",
    function() {
        if (!J(this, "disabled")) {
            $(b.mainForm);
            oa = "getSmsCode";
            "+86" === v(b.codeValue.innerHTML) ? v(b.userName.value) : (v(b.codeValue.innerHTML), v(b.userName.value));
            var a = {
                sid: "passport"
            };
            Ia(b.mainForm, "password",
            function(b) {
                u.add("getSmsCode", b);
                b && !P(b) && (a = M(a, b), h.clientAcq && b.user === h.maskedPhone ? (a.userHash = V.hash, b.user && delete b.user) : h.clientAcq = !1, Ib(a))
            })
        }
    });
    y(b.registerButton, "click",
    function() {
        var a = a || c.event;
        h.currentView = "setPwd";
        Ia(b.setPwd, !1,
        function(a) {
            if (a && !P(a)) {
                var b = {
                    noPwd: !1
                },
                b = M(b, a);
                ib(b)
            }
        });
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.acConfirmOkBtn, E.click,
    function() {
        if (!J(this, "disabled")) if (h.clientAcq) Aa(),
        Ba("ticket"),
        b.userName.value = h.maskedPhone;
        else {
            var a = xa(na);
            a.user = La.phone;
            za("/pass/serviceLoginTicketAuth", a)
        }
    });
    y(b.acConfirmNoBtn, E.click,
    function() {
        if (!J(this, "disabled")) {
            var a = G.CONFIRM_ACC_TIP,
            a = a.replace("{phone}", S.data.phone),
            a = a.replace("{username}", S.data.maskedUserId);
            confirm(a) && Ka()
        }
    });
    y(b.acConfirmBackBtn, E.click,
    function() {
        Aa();
        h.clientAcq && (w(b.acqTipsConf), w(b.acqTipsMain), V.resetCookie(), h.clientAcq = !1);
        Xa(b.mainForm)
    });
    var V = function() {
        var a = function() {
            y(b.acRegisterOkBtn, E.click,
            function() {
                J(this, "disabled") || Ka()
            });
            y(b.acRegisterNoBtn, E.click,
            function() {
                c();
                h.clientAcq = !1;
                Aa();
                w(b.acqTipsMain);
                w(b.acqTipsReg);
                Xa(b.mainForm)
            });
            y(b.agreeCheckBox, E.click,
            function() {
                J(this, "icon_true") ? H(this, "icon_true") : x(this, "icon_true");
                J(this, "icon_true") ? H(b.acRegisterOkBtn, "disabled") : x(b.acRegisterOkBtn, "disabled")
            })
        },
        c = function() {
            B("hash", "", -1, "/", ".account.xiaomi.com", pa);
            B("activatorToken", "", -1, "/", ".account.xiaomi.com", pa);
            B("operator", "", -1, "/", ".account.xiaomi.com", pa);
            B("operatorLink", "", -1, "/", ".account.xiaomi.com", pa)
        };
        return {
            start: function() {
                var c = e("hash");
                "" !== c && "" !== e("activatorToken") && Ajax({
                    url: "/pass/phoneInfo",
                    method: "POST",
                    data: {
                        userHash: c
                    },
                    success: function(c) {
                        u.add("phoneInfo", c);
                        S = c = k(c);
                        if (0 === c.code) {
                            h.clientAcq = !0;
                            var d = Base64.decode(e("operator")),
                            g = Base64.decode(e("operatorLink"));
                            b.acqTipsConf.innerHTML = b.acqTipsReg.innerHTML = b.acqTipsMain.innerHTML = '<a href="' + g + '">' + d + "</a>";
                            C(b.acqTipsMain);
                            C(b.acqTipsConf);
                            C(b.acqTipsReg);
                            h.maskedPhone = c.data.phone;
                            switch (c.data.status) {
                            case 1:
                                ya("acConfirm", c);
                                break;
                            case 2:
                                Aa();
                                b.userName.value = c.data.phone;
                                break;
                            case 0:
                                a(),
                                f(".maskedPhone", b.acRegister)[0].innerText = h.maskedPhone,
                                ya("acRegister", c)
                            }
                        }
                    }
                })
            },
            resetCookie: c,
            hash: e("hash")
        }
    } (),
    Rb = {
        start: function(a) {
            c.miAccGetTokenHandler = function(a) {
                0 === a.code && ((new Image).src = a.url)
            }; (function(a) {
                var b = d.createElement("script");
                b.src = a;
                d.body.insertBefore(b, d.body.firstChild)
            })("https://act.account.xiaomi.com/h5/getAccessToken")
        }
    };
    u.add("JSP_VAR", c.JSP_VAR);
    u.add("_d_", c._d_);
    u.add("_t_", c._t_);
    u.add("CONF", s);
    u.add("STAT", h);
    u.add("MSG", G);
    u.add("env", Nb);
    u.add("browser", da);
    u.add("search", location.search);
    u.add("=====================================\u5206\u5272\u7ebf==========================", "=====================================================================");
    s.getPhoneOn && Rb.start();
    y(Ca, E.keypress,
    function(a) {
        a = a || c.event;
        if (a = a.charCode || a.keyCode) T.tmpVal += String.fromCharCode(a);
        clearTimeout(T.tc);
        T.tc = setTimeout(Mb, 50)
    });
    h.showCustomPage && (s.loginBanner.cls && x(b.body, "win_banner_" + s.loginBanner.cls), x(b.body, "win_banner_" + s.loginBanner.name), s.loginBanner.qrName && (b.customQrName.innerHTML = s.loginBanner.qrName), mb(), b.bannerIframe && (b.bannerIframe.src = s.loginBanner.src), h.isMihomeMemberType && (X(O.FOOTER + O.SNSLOGIN + O.LOGO + O.SNSDEFAULT), "ticket" === z("_defaultLogin") && X(O.OUTERLINK)), s.loginBanner.customizeTitle && (b.navTabs.innerHTML = s.loginBanner.customizeTitle)); ! z("_noAcq") && s.enableSMS && z("lsrp_appName") && V.start();
    if (h.enableCode) {
        var Da = RegionsCode.search(s.region || s.locale.split("_")[1] || "cn");
        Da && (u.add("DefaultRegion", Da), RegionsCode.addUsual(Da), b.codeValue.innerHTML = (Da.N + "").replace(/^00/, "+"))
    }
    l(b.userName);
    l(b.pwd);
    ea && ea.length && ("ticket" === h.loginType && Ba(h.loginType), 1 === ea.length && w(b.changeLoginType));
    if ("qr" === s.loginType) la(!0);
    else if ("all" !== s.loginType) {
        var qb = !1;
        0 < s.loginType.indexOf("only") && (qb = !0, va(!0), x(b.navTabs, "only"));
        h.loginType = s.loginType.split("only")[0];
        Ba(h.loginType, qb)
    }
    z("_showQr") && ("false" === z("_showQr") ? va(!0) : "true" === z("_showQr") && C(b.qrTrigger, !0));
    y(b.qrTrigger, E.click, la);
    y(b.qrClose, E.click, va);
    y(b.qrTrigger, E.focus,
    function() {
        pb.on(Ta.SPACE, la)
    });
    y(b.qrTrigger, E.blur,
    function() {
        pb.off(Ta.SPACE, la)
    });
    x(b.body, s.locale);
    var qa = "";
    try {
        qa = c.miui.getDeviceCloudHashId(),
        u.add("deviceId", qa)
    } catch(Wb) {}
    if (qa && 10 < qa.length) {
        var pa = 189216E4;
        B("deviceId", qa, 21900, "/", ".account.xiaomi.com", pa)
    }
    t(b.outerLink,
    function(a, b) {
        var c = a.href;
        a.href = c + location.search;
        u.add("outerlink" + b, c)
    });
    b.msgPrivacy && (b.msgPrivacy.href = s.privacyLink);
    b.copyRight.innerHTML = s.copyRight;
    b.recordLink = f(".beian-record-link")[0];
    s.copyRightHide && w(b.copyRight);
    if (s.snsDefault) {
        var ia = Ab(s.snsDefault);
        ia && b.snsDefaultCon && (b.snsDefaultCon.innerHTML = ia)
    } else t(b.snsLoginItems,
    function(a, b) {
        var c = a.getAttribute("data-type"),
        d = Wa(c);
        ua(s.snsDisabled) && Fa(s.snsDisabled, c) ? (w(a), u.add("snsloginlink", c, "hide")) : (u.add("snsloginlink", c, d), d && (a.href = d, a.target = "_blank"))
    }),
    b.snsLoginCon && C(b.snsLoginCon, !0);
    t(b.langSelect,
    function(a, b) {
        var c = a.getAttribute("data-lang");
        c === s.locale ? x(a, "current") : (a.href = Qb(c), u.add("langInit", c))
    });
    u.add("linkInit", "done", "register,forgetPwd,snsLogin,languageSelect,loginBanner");
    b.agreeLink.setAttribute("href", JSP_VAR.agreeLink);
    b.privacyLink.setAttribute("href", JSP_VAR.privacyLink);
    s.captchaNeed && (u.add("captchaNeed", "pageinitNeed"), bb(), ma(b.captchaImg));
    b.inputs = wa(b.layout);
    t(b.inputs,
    function(a, c) {
        aa.on(a,
        function(a, c) {
            $(b[h.currentView])
        })
    });
    aa.on(b.userName,
    function(a, c) {
        h.clientAcq && (b.userName.value = "", w(b.acqTipsMain), V.resetCookie(), h.clientAcq = !1);
        var d = Ha(a, !0);
        $(b.mainForm);
        h.enableCode && "pwd" === h.loginType && hb(d)
    });
    aa.on(b.pwd,
    function(a, c) {
        $(b.mainForm);
        b.pwdVisiable && (b.pwdVisiable.value = a)
    });
    b.pwdVisiable && aa.on(b.pwdVisiable,
    function(a, c) {
        $(b.mainForm);
        b.pwd.value = a
    });
    y(b.toggleVisiable, "click",
    function(a) {
        a = a || c.event;
        b.toggleVisiable.__visiable ? (b.toggleVisiable.__visiable = !1, H(b.pwdEye, "chk"), C(b.pwd), w(b.pwdVisiable), U(b.pwd, "focus")) : (b.toggleVisiable.__visiable = !0, x(b.pwdEye, "chk"), w(b.pwd), C(b.pwdVisiable), U(b.pwdVisiable, "focus"));
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.changeLoginType, "click",
    function() {
        "ticket" !== h.loginType ? h.loginType = "ticket": h.loginType = "pwd";
        Ba(h.loginType);
        u.add("loginType", h.loginType)
    });
    if (!0 === JSP_VAR.showActiveXControl) {
        if ("IE" === da.name || "Firefox" === da.name) C(b.securityControllerPanel, !0),
        u.add("activeXControl", "true")
    } else w(b.securityControllerPanel);
    var rb = !1;
    b.securityController && (b.securityController.checked = rb ? !0 : !1);
    y(b.securityController, E.click,
    function() {
        var a = !0;
        try {
            new ActiveXObject("XiaomiEdit.XiaomiEditCtrl.1")
        } catch(c) {
            a = !1
        }
        a = "IE" === da.name && a || navigator.plugins["Xiaomi Safe Control for NP"]; (rb = b.securityController.checked) ? a ? (w(b.pwd), a = d.createElement("div"), x(a, "pwd-object"), "IE" === da.name ? (a.innerHTML = '<object id="XiaomiEdit" name="XiaomiEdit" classid="CLSID:E0A362BA-2608-48EA-9D8F-F45258D3091C" width="358" height="50"></object>', b.pwd.parentNode.appendChild(a), d.getElementById("XiaomiEdit")) : (a.innerHTML = '<object type="application/npXiaomiEditCtl-Plugin" id="npXiaomiEdit" name="XiaomiEdit" width="358" height="48"></object>', b.pwd.parentNode.appendChild(a), d.getElementById("npXiaomiEdit")), H(b.pwd.parentNode, "labelbox")) : Sa.show() : (C(b.pwd), x(b.pwd.parentNode, "labelbox"), f(".pwd-object")[0] && b.pwd.parentNode.removeChild(f(".pwd-object")[0]), a && (b.pwd.value = ""))
    });
    u.add("stoppropagation keyevent", E.keydown + "," + E.keyup + "," + E.keypress);
    y(b.pwd, E.keydown,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.pwd, E.keyup,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.pwd, E.keypress,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    b.pwdVisiable && (y(b.pwdVisiable, E.keydown,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    }), y(b.pwdVisiable, E.keyup,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    }), y(b.pwdVisiable, E.keypress,
    function(a) {
        a = a || c.event;
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    }));
    u.add("addInputChange", "userName");
    y(b.mainForm, "submit",
    function(a) {
        a = a || c.event;
        a.preventDefault ? a.preventDefault() : a.returnValue = !1;
        var d = xa(na);
        if (!Ia(b.mainForm)) return ! 1;
        s.captchaNeed && (d.captCode = v(b.captchaCode.value));
        if ("pwd" === h.loginType) {
            a = h.showCodeValue ? v(b.codeValue.innerHTML) + v(b.userName.value) : v(b.userName.value);
            var e = f("#XiaomiEdit") || f("#npXiaomiEdit"),
            e = e && e.GetValue() || b.pwd.value;
            h.clientAcq && h.maskedPhone === a ? d.userHash = V.hash: d.user = a;
            d.hash = (CryptoJS.MD5(e).toString() + "").toUpperCase(); ! s.md5pwd && (d.pwd = e);
            za("/pass/serviceLoginAuth2", d)
        } else if ("ticket" === h.loginType) {
            var l = "+86" === v(b.codeValue.innerHTML) ? v(b.userName.value) : v(b.codeValue.innerHTML) + v(b.userName.value);
            a = b.pwd.value;
            if (h.clientAcq && h.maskedPhone === l) return d.userHash = V.hash,
            d.ticket = a,
            za("/pass/serviceLoginTicketAuth", d),
            !1;
            La.phone = l;
            Ajax({
                url: "/pass/phoneInfo",
                method: "POST",
                data: {
                    user: l,
                    ticket: a
                },
                success: function(a) {
                    u.add("phoneInfo", a);
                    S = a = k(a);
                    var b = a.code;
                    if (0 === b) switch (h.registerPwd = a.data.registerPwd, a.data.status) {
                    case 1:
                        ya("acConfirm", a);
                        break;
                    case 2:
                        d.user = l;
                        za("/pass/serviceLoginTicketAuth", d);
                        break;
                    case 0:
                        Ka()
                    } else if (b in N) N[b](a);
                    else N.fail(a)
                }
            })
        }
        return ! 1
    });
    var sb = parseInt(z("_customDisplay")) || 0;
    X(sb);
    "true" === s.snsNone ? X(O.SNSLOGIN + O.SNSDEFAULT) : s.snsDefault ? (X(O.SNSLOGIN), "none" !== b.snsDefaultCon.style.display && x(d.body, "hasSnsDefault"), u.add("customDisplay", "snslogin", O.SNSLOGIN)) : (u.add("customDisplay", "snsdefault", O.DEFAULT), X(O.SNSDEFAULT));
    u.add("customDisplay", sb);
    var tb = z("lsrp_appName");
    tb && Eb(tb);
    Ajax({
        url: s.infoUrl,
        data: {
            _locale: s.locale
        },
        success: function(a, c) {
            u.add("siteInfo", a);
            var e = k(a),
            e = e[s.locale] || e[JSP_VAR.locale] || [],
            f = d.createElement("div"),
            h = "";
            t(e,
            function(a, b) {
                h += '<p class="site_info_txt">' + (a.url ? '<a href="' + a.url + '" class="site_info_link" target="_blank">': "") + a.txt + (a.url ? "</a>": "") + "</p>"
            });
            x(f, "site_info");
            f.innerHTML = h;
            b.header.parentNode.appendChild(f)
        }
    });
    y(b.codeSelector, E.click,
    function(a) {
        if (h.enableCode) {
            h.codeInit || (h.codeInit = !0, Fb());
            K.clean(b.userName);
            a = a || c.event;
            var d = a.target || a.srcElement;
            if (J(d, "countrycode_selector") || J(d, "countrycode-value") || J(d, "country_code") || J(d, "icon_arrow_down")) h.codeShown ? (w(b.codeContainer), h.codeShown = !1) : (C(b.codeContainer, !0), b.searchCodeInput && U(b.searchCodeInput, "focus"), h.codeShown = !0);
            "cancelBubble" in a && (a.cancelBubble = !0);
            "stopPropagation" in a && a.stopPropagation();
            return ! 1
        }
    });
    y(b.body, E.click,
    function(a) {
        ba();
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.codeContainer, E.click,
    function(a) {
        a = a || c.event;
        var b = a.target || a.srcElement;
        J(b, "record") ? (gb(b), ba()) : J(b, "record-country") || J(b, "record-code") ? (gb(b.parentNode), ba()) : J(b, "search-code") || J(b, "search-code-input") || ba();
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    y(b.navTabs, E.click,
    function(a) {
        a = a || c.event;
        a = a.target || a.srcElement;
        J(a, "navtab-link") && (a = a.getAttribute("data-tab"), Hb(a))
    });
    var ra = parseInt(z("_userId"), 10) || 0,
    Sb = parseInt(e("userId"), 10),
    ub = D(e("userName")),
    sa = D(decodeURIComponent(z("_userName")));
    ra && (h.verifyPwd = !0, sa || (sa = ra, Sb === ra && ub && (sa = ub)), u.add("verifyPwd", ra, sa), b.userName.value = ra, b.pwd.value = "", w(b.changeLoginType), w(b.userName.parentNode), C(b.accountInfo, !0), x(b.pwd.parentNode, "accinfo_single_label"), w(b.qrTrigger), b.accountDisplayname.innerHTML = sa, b.header.innerHTML = G.VERIFY_PASSWORD, b.loginButton.value = G.VERIFY_PASSWORD_SUBMIT, b.accountDisplayname.style.fontSize = "20px", b.accountDisplayname.style.paddingBottom = "20px", w(f("#custom_display_" + O.SNSLOGIN)));
    y(b.manualCode, E.click,
    function(a) {
        a = a || c.event;
        h.showCodeValue && (h.showCodeValue = !1, h.manualCodeFlag = !1, h.manualControlCode = !0, H(b.regionCode, "add_regioncode"), x(b.manualCode.parentNode, "turn_off"), x(b.regionCode, "divflex"), u.add("manualCode", h.showCodeValue, h.manualControlCode));
        ba();
        "cancelBubble" in a && (a.cancelBubble = !0);
        "stopPropagation" in a && a.stopPropagation()
    });
    var Ea = !0;
    if (scopes) {
        var ja = d.createElement("div");
        ja.innerHTML = s.oauthTpl;
        b.loginMain.parentNode.appendChild(ja);
        scopes = Z(scopes);
        b.scopeList = f(".scope_list", ja)[0];
        b.OAuthBox = ja;
        b.OAuthWrap = f(".oauth_wrap", ja)[0];
        b.OAuthWrapText = f(".wrap_more", ja)[0];
        for (var ia = _htmlMore = "",
        R = 0; R < scopes.length; R++) R < s.oauthInitNum ? ia += '<p class="scope_item"><i class="icon_select icon_true disabled"></i>' + scopes[R].name + "</p>": _htmlMore += '<p class="scope_item"><i class="icon_select icon_true disabled"></i>' + scopes[R].name + "</p>";
        b.scopeList.innerHTML = ia + '<div class="scope_more scope-more">' + _htmlMore + "</div>";
        scopes.length > s.oauthInitNum && C(b.OAuthWrap, !0);
        y(b.OAuthWrap, "click",
        function() {
            Ea = !Ea;
            b.OAuthWrapText.innerText = Ea ? "更多": "收起";
            Ea ? (H(b.OAuthWrap, "up"), w(f(".scope-more")[0])) : (x(b.OAuthWrap, "up"), C(f(".scope-more")[0], !0))
        })
    }
    if (b.recordLink && s.beianRecordLink) {
        b.recordLink.href = s.beianRecordLink;
        var fa = new Image,
        Tb = f("span", b.recordLink)[0];
        fa.onload = fa.oncomplete = function() {
            fa._loaded = !0;
            Tb.appendChild(fa)
        };
        setTimeout(function() { ! fa._loaded && (fa.src = s.default1px_gif)
        },
        1E3);
        fa.src = s.beianRecordImg
    }
    if (ca) {
        b.cookieUsage.innerHTML = s.cookieUsageTpl;
        var Ub = f(".close-cookie-usage", b.cookieUsage)[0],
        vb = null;
        c.localStorage ? "true" !== localStorage.getItem("COOKIE_USAGE") && C(b.cookieUsage, !0) : C(b.cookieUsage, !0);
        y(Ub, E.click,
        function(a) {
            a = a || c.event;
            clearTimeout(vb);
            w(b.cookieUsage);
            c.localStorage && localStorage.setItem("COOKIE_USAGE", !0);
            "cancelBubble" in a && (a.cancelBubble = !0);
            "stopPropagation" in a && a.stopPropagation()
        });
        vb = setTimeout(function() {
            w(b.cookieUsage)
        },
        2E4)
    }
    Pa && Pa.loaded && Pa.loaded()
})(window, document);
 < /script> 