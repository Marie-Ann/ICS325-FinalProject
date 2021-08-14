USE nerdvana;

CREATE VIEW my_events AS
SELECT scheduled_event.event_name, scheduled_event.hosted_by, userevent.event_date 
FROM scheduled_event JOIN userevent;

SELECT * FROM my_events;