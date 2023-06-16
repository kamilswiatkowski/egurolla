<?php
		$school_list = get_field('school_list', 'option');
		
		// php function to convert csv to json format
		function csvToJson($fname)
		{
				$fname = get_attached_file($fname['ID']);
				// open csv file
				if( ! ($fp = fopen($fname, 'r'))) {
						die("Can't open file...");
				}
				
				//read csv headers
				$key = fgetcsv($fp, "1024", ",");
				
				// parse csv rows into array
				$json = [];
				while ($row = fgetcsv($fp, "1024", ",")) {
						$json[] = array_combine($key, $row);
				}
				
				// release file handle
				fclose($fp);
				
				// encode array to json
				return json_encode($json);
		}
		
		$json_partners = $school_list ?  csvToJson($school_list) : '{}'
?>
<script>
    window.PARTNERS = <?php echo $json_partners; ?>;
</script>
<div class="map" id="mapa">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<h2 class="title">ZNAJDŹ PUNKT PARTNERSKI <br>
										I SKORZYSTAJ Z PROMOCJI</h2>
						</div>
				</div>
				<div class="row">
						<div class="col-12">
								<div class="map__container">
										<script>
                        (g => {
                            var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary",
                                q = "__ib__", m = document, b = window;
                            b = b[c] || (b[c] = {});
                            var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
                                u = () => h || (h = new Promise(async (f, n) => {
                                    await (a = m.createElement("script"));
                                    e.set("libraries", [...r] + "");
                                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                                    e.set("callback", c + ".maps." + q);
                                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                                    d[q] = f;
                                    a.onerror = () => h = n(Error(p + " could not load."));
                                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                                    m.head.append(a);
                                }));
                            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n));
                        })({
                            key: "AIzaSyBkJnCabBQ5RTejdqm3kkLfXF-areA90CM",
                            v: "weekly",
                            libraries: "places,markerclusterer",
                        });
										</script>
										<?php if($school_list) { ?>
										<div class="map__search">
												<div class="map__search-title">
														Wpisz miejscowość lub kod pocztowy
												</div>
												<div class="map__search-input">
														<input
															id="pac-input"
															class="controls"
															type="text"
															placeholder="Wyszukaj"
														/>
												</div>
												<div class="map__search-localization">
														Użyj mojej lokalizacji
												</div>
												<div class="map__search-results">
														Wynik: <?php echo count(json_decode($json_partners)); ?>
												</div>
												<div class="map__search__partners">
														<?php foreach (json_decode($json_partners) as $partner) { ?>
																<div class="map__search__partner">
																		<div class="map__search__partner-data">
																				<div class="map__search__partner-name">
																						<?php echo $partner->company; ?>
																				</div>
																				<div class="map__search__partner-address">
																						<?php echo $partner->address; ?>
																				</div>
																		</div>
																		<div class="map__search__partner-button" data-toggle-popup="punkt-partnerski"
																		     data-lat data-lng>
																				WYBIERZ
																		</div>
																</div>
														<?php } ?>
												</div>
										</div>
										<?php } ?>
										<div id="map" class="map__google">
										
										</div>
								</div>
						</div>
				</div>
		</div>
</div>