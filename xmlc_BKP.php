<?php

// Example production URLs (replace with your actual list)
$productionUrls = [
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Aligning_large_Dimension_couplings_ALI.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/How-to-safely-align-wind-turbines.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/index.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Tetra-Pak-Uses-ParAlign-Services-to-Ensure-Product-Quality.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Mitsubishi-Power-Aero.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Every-thenth-saves-money.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/The-challenges-of-monitoring-mobile-mining-equipment.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/PRUFTECHNIK-Alignment-keeps-a-coaster-rolling.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Drive-train-alignment-on-wind-turbines.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/All-about-speed.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Brackets-and-Shims/Shims",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/SHAFTALIGN-touch/index.html",
    "/en-US/Products-and-Services/Services/Technical-Support/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-II-Balancer",
    "/en-US/Contact/Sales-Contact/Contact-form",
    "/en-US/LP/campaigns",
    "/en-US/LP/campaigns/NDT/index.html",
    "/en-US/LP/campaigns/why_alignment/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Sensors-and-Accessories/Fluke-820-2-LED-Stroboscope/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Software/OMNITREND-Asset-View/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-810/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-805-FC/index.html",
    "/en-US/LP/campaigns/why_condition_monitoring/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Software/OMNITREND-Center/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-3-Balancer",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Sensors-Accessories/Vibration-Sensors-and-Accessories/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Software/OMNITREND-Center/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Sensors-Accessories/Fluke-820-2-LED-Stroboscope/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Software/OMNITREND-Asset-View/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/VIBGUARD-compact/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-3563-Analysis-Vibration-Sensors/",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/?_ga=2.112896333.836315449.1707928969-1132687240.1628275896",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Turnkey-systems/Turnkey-systems/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Encircling-coils/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Accessories-and-probes/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-610/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-605/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-605-compact/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Rotating-Systems/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Segment-Coils/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Lubricant-Particle-Counting/Wear-Monitoring-Systems/WEARSCANNER",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Lubricant-Particle-Counting/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Brackets-and-Shims/Shims/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Geometrical-Measurement-Systems/GEO-CENTER/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Brackets-and-Shims/Brackets/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating/Induction-Bearing-Heaters/EDDYTHERM-2x/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment/PULLEY-ALIGNMENT-SYSTEMS/PULLALIGN/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment/PULLEY-ALIGNMENT-SYSTEMS/PULLALIGN-Lite-2/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating/Induction-Bearing-Heaters/EDDYTHERM-Portable/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage/Flux-leakage-testing-systems/NOVAFLUX/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage/Flux-leakage-testing-systems/NOVAFLUX-RFL-70/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Power-Monitoring/Power-Monitoring-Systems/Fluke-3540-FC/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment/Brackets-and-Shims/Shims/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/Machine-protection-Systems/VIBROTECTOR/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment/Brackets-and-Shims/Brackets/index.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Precision-Meets-Connectivity.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/High-reliability-of-air-screw-compressors-with-VIBGUARD-compact.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Move-the-data-not-the-people.html",
    "/en-US/About-us/Company/Company-profile/index.html",
    "/en-US/Know-How/Media-Center/Webinar/Best-Practice-Webinar-Tips-technology-and-tools-for-next-generation-machinery-alignment.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/Machine-protection-Systems/VIBREX/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/ROTALIGN-touch-EX/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Software/ALIGNMENT-RELIABILITY-CENTER-4.0/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Brackets-Shims/Shims/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Brackets-Shims/Brackets/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Lubricant-Particle-Counting/Wear-Monitoring-Systems/WEARSCANNER/index.html",
    "/en-US/LP/campaigns/index.html",
    "/en-US/Know-How/Media-Center/Webinar/Field-Balancing-From-theory-to-smart-balancing.html",
    "/en-US/Know-How/Media-Center/Webinar/How-to-enhance-your-Rotating-Machinery-reliability-Vibration-Acceptance-Tests.html",
    "/en-US/Know-How/Media-Center/Webinar/Answers-to-your-questions-regarding-'VIBXpert-II'-analyzer.html",
    "/en-US/Know-How/Media-Center/Webinar/How-to-plan-and-manage-an-online-condition-monitoring-project.html",
    "/en-US/Know-How/Media-Center/Webinar/Answers-to-your-questions-regarding-‘OMNITREND'-vibration-software.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/Machine-protection-Systems/VIBREX/index.html",
    "/en-US/Contact/Sales-Contact/Contact-form",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Sensors-and-Accessories/Vibration-Sensors-and-Accessories",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current",
    "/en-US/Footer",
    "/en-US/Products-and-Services/Services/Vibration-Analysis-and-Balancing-Services",
    "/en-US/About-us/Company/Events",
    "/en-US/Training/Academy/Training-Calendar",
    "/en-US/Contact/Technical-Contact/Technical-support",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/OPTALIGN-touch",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection",
    "/en-US/Products-and-Services/Services/PARALIGN-Roll-Alignment-Services",
    "/en-US/Products-and-Services/Services/Laser-Alignment-Services",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/ROTALIGN-touch",
    "/en-US/Industries/Industries/Wind-Energy",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment",
    "/en-US/Press-and-Events/Events/Events-and-Fairs",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-II/index-2.html",
    "/en-US/About-us/Company/Certificates-and-Material-Safety",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Power-Monitoring",
    "/en-US/Know-How/Media-Center/Certificates-and-Material-Saftey",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-3",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/VIBGUARD-IIoT",
    "/en-US/Know-How/Media-Center/Downloads",
    "/en-US/Know-How/Media-Center/Videos",
    "/en-US/About-us/Company/Press-and-News",
    "/en-US/Contact/Sales-Contact/Find-Your-Local-Sales-Representative",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/SHAFTALIGN-touch",
    "/en-US/Products-and-Services/Services/Technical-Support",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-II-Balancer/index-2.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-810",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-805-FC",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Software/OMNITREND-Center",
    "/en-US/LP/campaigns/why_condition_monitoring",
    "/en-US/Footer/index.html",
    "/en-US/Contact/Sales-Contact/Contact-form/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Sensors-Accessories/Vibration-Sensors-and-Accessories",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Software/OMNITREND-Center",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Sensors-Accessories/Fluke-820-2-LED-Stroboscope",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Software/OMNITREND-Asset-View",
    "/en-US/Know-How/Media-Center/Webinar/The-most-common-questions-on-‘touch’-laser-alignment-platforms-answered.html",
    "/en-US/Know-How/Media-Center/Webinar/Applying-adaptive-alignment-to-vertical-laser-alignments-and-measuring-modes.html",
    "/en-US/Know-How/Media-Center/Webinar/Motor-stand-vibration-testing-made-simple.html",
    "/en-US/Know-How/Media-Center/Webinar/Expert-advice-for-multi-channel-vibration-analysis.html",
    "/en-US/Know-How/Media-Center/Webinar/IIoT-and-the-way-to-smart-condition-monitoring.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News",
    "/en-US/Products-and-Services/Services/Safety-notices",
    "/en-US/Industries/Industries/Marine-Offshore",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper",
    "/en-US/About-us/Company/Company-profile",
    "/en-US/Products-and-Services/Services/Repair-and-Calibration/index-2.html",
    "/en-US/Know-How/Media-Center/Webinar",
    "/en-US/Training/Academy/PRUFTECHNIK-Academy-Worldwide",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Precision_alignment_cuts_maintenance_spend_Corbion_ALI.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating",
    "/en-US/Industries/Industries/Industries-overview",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment",
    "/en-US/About-us/Company/PRUFTECHNIK-Worldwide",
    "/en-US/Products-and-Services/Services/All-Services",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBSCANNER-2",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/VIBGUARD-IIoT",
    "/en-US/Know-How/Media-Center/Downloads",
    "/en-US/Know-How/Media-Center/Videos",
    "/en-US/About-us/Company/Press-and-News",
    "/en-US/Contact/Sales-Contact/Find-Your-Local-Sales-Representative",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/SHAFTALIGN-touch",
    "/en-US/Products-and-Services/Services/Technical-Support",
    "/en-US/LP/campaigns/NDT",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/Fluke-3563-Analysis-Vibration-Sensors/index.html",
    "/en-US/LP/campaigns/why_alignment",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Sensors-and-Accessories/Fluke-820-2-LED-Stroboscope",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-3563-Analysis-Vibration-Sensors/index-2.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Software/OMNITREND-Asset-View",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBSCANNER-2-EX/index-2.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-810",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-II-Balancer/index-2.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/Fluke-805-FC",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Software/OMNITREND-Center",
    "/en-US/Know-How/Media-Center/Webinar/Best-Practice-Webinar-The-most-costly-pitfalls-in-laser-shaft-alignment-and-how-to-avoid-them.html",
    "/en-US/Know-How/Media-Center/Webinar/%5BBest-Practice-Webinar%5D-Adaptive-alignment-the-next-generation-in-laser-shaft-alignment-systems.html",
    "/en-US/Know-How/Media-Center/Webinar/index.html",
    "/en-US/Know-How/Media-Center/Webinar/Get-to-know-these-‘touch’-platform-innovations-In-situ-cardan-shaft-and-multi-coupling-alignment.html",
    "/en-US/Know-How/Media-Center/Webinar/Taking-the-ROTALIGN-touch-to-the-next-level-Live-Trend-and-uncoupled-application.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/VIBGUARD-compact",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Sensors-and-Accessories/Vibration-Sensors-and-Accessories/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Turnkey-systems/Turnkey-systems",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Encircling-coils",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-610",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Accessories-and-probes",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-605-compact",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Eddy-current-testing-systems/EDDYCHEK-605",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Rotating-Systems",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Eddy-Current/Sensors-and-Accessories/Segment-Coils",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Lubricant-Particle-Counting",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-II",
    "/en-US/Products-and-Services/Services/Vibration-Analysis-and-Balancing-Services/index.html",
    "/en-US/About-us/Company/Events/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Brackets-Shims/Brackets",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Software/ALIGNMENT-RELIABILITY-CENTER-4.0",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Brackets-Shims/Shims",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Shaft-Alignment/Shaft-Alignment-Systems/ROTALIGN-touch-EX",
    "/en-US/Training/Academy/Training-Calendar/index.html",
    "/en-US/Contact/Technical-Contact/Technical-support/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/Machine-protection-Systems/VIBREX",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Machine-Protection/Machine-protection-Systems/VIBROTECTOR",
    "/en-US/Products-and-Services/Services/PARALIGN-Roll-Alignment-Services/index.html",
    "/en-US/Products-and-Services/Services/Laser-Alignment-Services/index.html",
    "/en-US/Industries/Industries/Wind-Energy/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment/Brackets-and-Shims/Brackets",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment/index.html",
    "/en-US/Press-and-Events/Events/Events-and-Fairs/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Accessories-for-alignment/Brackets-and-Shims/Shims",
    "/en-US/About-us/Company/Certificates-and-Material-Safety/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Power-Monitoring/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Power-Monitoring/Power-Monitoring-Systems/Fluke-3540-FC",
    "/en-US/Know-How/Media-Center/Certificates-and-Material-Saftey/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBXPERT-3/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage/Flux-leakage-testing-systems/NOVAFLUX-RFL-70",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage/index.html",
    "/en-US/Products-and-Services/Nondestructive-Testing-Systems/Flux-Leakage/Flux-leakage-testing-systems/NOVAFLUX",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/Pruftechnik-ShaftAlign-Touch-laser-alignment-system.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/Fortive-Day-Of-Caring.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/Comprehensive-Condition-Monitoring-Solutions.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/index.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/PRUFTECHNIK-in-the-US.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/PRUFTECHNIK-now-also-distributes-Fluke-products.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/Éxito-de-la-alta-velocidad-en-los-Solution-Awards.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/The-Dos-and-Don’ts-of-Vibration-Sensors.html",
    "/en-US/Press-and-Events/Press-and-News/Press-releases-and-News/PRUFTECHNIK-in-collaboration-with-MAN.html",
    "/en-US/Products-and-Services/Services/Safety-notices/index.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Cardan-shaft-measurement-in-confined-spaces.html",
    "/en-US/Industries/Industries/Marine-Offshore/index.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Wasted-energy-means-wasted-dollars.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Applying-inertial-roll-alignment-in-the-vacuum-metalizing-industry.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Gas-turbine-alignment-with-ROTALIGN-touch.html",
    "/en-US/Know-How/Media-Center/Webinar/Roll-Alignment-Why-parallelism-of-rolls-is-critical-for-high-speed-machines.html",
    "/en-US/Training/Academy/PRUFTECHNIK-Academy-Worldwide/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating/Induction-Bearing-Heaters/EDDYTHERM-Portable",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating/index.html",
    "/en-US/Industries/Industries/Industries-overview/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Induction-Heating/Induction-Bearing-Heaters/EDDYTHERM-2x",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/How-to-identify-the-root-cause-of-a-misalignment-condition.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Williams-Fabrication-and-Industrial-Services.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Continuous-condition-monitoring_VIBGUARD_CM.html",
    "/en-US/Know-How/Maintenance-Insights/Success-stories-and-Whitepaper/Roll-alignment-using-modern-measurement-service-PARALIGN.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment/PULLEY-ALIGNMENT-SYSTEMS/PULLALIGN",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment/PULLEY-ALIGNMENT-SYSTEMS/PULLALIGN-Lite-2",
    "/en-US/Products-and-Services/Services/All-Services/index.html",
    "/en-US/About-us/Company/PRUFTECHNIK-Worldwide/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Vibration-Analysis-and-Balancing/Vibration-Analyzer/VIBSCANNER-2/index.html",
    "/en-US/Products-and-Services/Condition-Monitoring-Systems/Online-Condition-Monitoring/Online-Condition-Monitoring-Systems/VIBGUARD-IIoT/index.html",
    "/en-US/Know-How/Media-Center/Downloads/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Pulley-Alignment/index.html",
    "/en-US/Know-How/Media-Center/Videos/index.html",
    "/en-US/About-us/Company/Press-and-News/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Apps/Laser-Alignment-Apps",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Geometrical-Measurement-Systems/GEO-CENTER",
    "/en-US/Contact/Sales-Contact/Find-Your-Local-Sales-Representative/index.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Brackets-and-Shims/Brackets",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/Geometrical-Measurement-Systems/LEVALIGN-expert/index-2.html",
    "/en-US/Products-and-Services/Alignment-Systems-for-Rotating-Machinery/Geometrical-Measurements/index.html",
];

// Example XML URLs (replace with URLs from your XML file)
$xmlUrls = [
   "/en-US/products-and-services/condition-monitoring-systems/machine-protection/machine-protection-systems/vibrotector/",
    "/en-US/products-and-services/condition-monitoring-systems/machine-protection/machine-protection-systems/vibrex/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/brackets-shims/shims/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/software/alignment-reliability-center-4.0/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/brackets-shims/brackets/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/sensors-and-accessories/rotating-systems/",
    "/en-US/products-and-services/condition-monitoring-systems/software/omnitrend-center/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/vibxpert-ii-balancer/index-2.html",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/shaft-alignment-systems/rotalign-touch/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/sensors-and-accessories/vibration-sensors-and-accessories/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/shaft-alignment-systems/optalign-touch/",
    "/en-US/products-and-services/condition-monitoring-systems/online-condition-monitoring/online-condition-monitoring-systems/vibguard-compact/",
    "/en-US/test-ac-page2-product/test-ac-page/",
    "/en-US/products-and-services/condition-monitoring-systems/power-monitoring/power-monitoring-systems/fluke-3540-fc/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/sensors-and-accessories/encircling-coils/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/eddy-current-testing-systems/eddychek-610/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/eddy-current-testing-systems/eddychek-605/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/vibscanner-2-ex/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/software/omnitrend-asset-view/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/vibscanner-2/",
    "/en-US/products-and-services/nondestructive-testing-systems/flux-leakage/flux-leakage-testing-systems/novaflux-rfl-70/",
    "/en-US/products-and-services/nondestructive-testing-systems/flux-leakage/flux-leakage-testing-systems/novaflux/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/turnkey-systems/turnkey-systems/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/sensors-and-accessories/segment-coils/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/sensors-and-accessories/accessories-and-probes/",
    "/en-US/products-and-services/nondestructive-testing-systems/eddy-current/eddy-current-testing-systems/eddychek-605-compact/",
    "/en-US/products-and-services/condition-monitoring-systems/lubricant-particle-counting/wear-monitoring-systems/wearscanner/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/fluke-805-fc/",
    "/en-US/products-and-services/condition-monitoring-systems/online-condition-monitoring/online-condition-monitoring-systems/vibguard-iiot/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/sensors-and-accessories/fluke-820-2-led-stroboscope/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/fluke-810/",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/fluke-3563-analysis-vibration-sensors/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/accessories-for-alignment/brackets-and-shims/brackets",
    "/en-US/products-and-services/condition-monitoring-systems/vibration-analysis-and-balancing/vibration-analyzer/vibxpert-3/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/pulley-alignment/pulley-alignment-systems/pullalign-lite-2/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/induction-heating/induction-bearing-heaters/eddytherm-portable/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/induction-heating/induction-bearing-heaters/eddytherm-2x/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/geometrical-measurements/geometrical-measurement-systems/levalign-expert/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/pulley-alignment/pulley-alignment-systems/pullalign/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/geometrical-measurements/geometrical-measurement-systems/geo-center/",
    "/en-US/product/products-and-services-alignment-systems-for-rotating-machinery-shaft-alignment/",
    "/en-US/products-and-services/alignment-systems-for-rotating-machinery/shaft-alignment/shaft-alignment-systems/rotalign-touch-ex/",
    "/en-US/product/all-videos-demo/",
    "/en-US/product/test-product-111/",
];

// Function to normalize URLs by removing trailing slashes and converting to lowercase
function normalizeUrls(array $urls): array {
    return array_map(function ($url) {
        return strtolower(rtrim(trim($url), '/')); // Trim whitespace, remove trailing slash, and convert to lowercase
    }, $urls);
}

// Normalize both arrays
$normalizedProductionUrls = normalizeUrls($productionUrls);
$normalizedXmlUrls = normalizeUrls($xmlUrls);

// Array to store URLs missing in XML
$missingInXml = [];

// Compare each URL in $productionUrls with $xmlUrls
foreach ($normalizedProductionUrls as $prodUrl) {
    if (!in_array($prodUrl, $normalizedXmlUrls)) {
        $missingInXml[] = $prodUrl; // Add missing URL from production
    }
}

// Save missing URLs in XML to a file
$missingInXmlFile = "urls_missing_in_xml.txt";
file_put_contents($missingInXmlFile, implode("\n", $missingInXml));

echo "URLs missing in XML have been saved to $missingInXmlFile\n";

?>