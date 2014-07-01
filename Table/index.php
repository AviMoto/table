<!DOCTYPE html>
<html>
<head>
	<title>repoert</title>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>

<body>
	<section id="filters">
		<label>
			קורסים מתאריך:
			<input type="date" name="fromDate" id="fromDate">
		</label>
		<label>
			קורסים עד תאריך:
			<input type="date" name="toDate" id="toDate">
		</label>
		<label>
			שם שלוחה:
			<select name="extension" id="extension"></select>
		</label>
		<label>
			שם מסלול:
			<select name="course" id="course"></select>
		</label>
		<label>
			סינון:
			<input type="text" name="filter" id="filter">
		</label>
	</section>
	<table>
		<thead>
			<tr><th rowspan="2">שם מרצה</th><th rowspan="2">ת.ז.</th><th rowspan="2">מספר סטדנטים</th><th rowspan="2">קורסים</th><th colspan="4">משאבים</th><th colspan="4">פעילויות</th></tr>
			<tr><th>קבצים</th><th>קבצי וידאו</th><th>קישורים</th><th>וידאו משובץ</th><th>מטלות</th><th>בחנים</th><th>פורום</th><th>נוכחות</th></tr>
		</thead>
		<tbody></tbody>
		<tfoot></tfoot>
	</table>
</body>
</html>
